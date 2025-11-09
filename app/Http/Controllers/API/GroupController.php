<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Http\Resources\GroupResource;
use App\Http\Resources\GroupCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Access\AuthorizationException;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('permission:create-groups')->only('store');
        $this->middleware('permission:manage-own-groups')->only(['update', 'destroy']);
        $this->middleware('permission:manage-any-groups')->only(['update', 'destroy']);
    }

    /**
     * Display a listing of groups.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Group::active()
                    ->with(['creator', 'members' => function ($q) {
                        $q->limit(3); // Only load a few members for preview
                    }])
                    ->withCount('members');

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Filter by accessibility for current user
        if (auth()->check()) {
            $query->accessibleBy(auth()->user());
        } else {
            $query->public();
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Sort
        match ($request->input('sort', 'recent')) {
            'name' => $query->orderBy('name'),
            'members' => $query->orderBy('members_count', 'desc'),
            'oldest' => $query->orderBy('created_at'),
            default => $query->orderBy('created_at', 'desc'),
        };

        $groups = $query->paginate($request->input('per_page', 12));

        return response()->json([
            'success' => true,
            'data' => new GroupCollection($groups),
        ]);
    }

    /**
     * Store a newly created group.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'type' => 'required|in:public,private,secret',
            'avatar' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $group = Group::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'avatar' => $request->avatar,
            'created_by' => auth()->id(),
            'is_active' => true,
            'members_count' => 1,
        ]);

        // Add creator as owner
        $group->addMember(auth()->user(), 'owner');

        $group->load(['creator', 'members']);

        return response()->json([
            'success' => true,
            'message' => 'Group created successfully',
            'data' => new GroupResource($group),
        ], 201);
    }

    /**
     * Display the specified group.
     */
    public function show(Request $request, Group $group): JsonResponse
    {
        // Check if user can view this group
        if (!$group->canBeViewedBy(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'Group not found or access denied',
            ], 404);
        }

        $group->load([
            'creator',
            'members' => function ($query) {
                $query->withPivot('role', 'joined_at')
                      ->orderBy('pivot_joined_at');
            },
            'threads' => function ($query) {
                $query->with(['user'])
                      ->withCount(['comments', 'likes'])
                      ->orderBy('last_reply_at', 'desc')
                      ->limit(5);
            }
        ]);

        return response()->json([
            'success' => true,
            'data' => new GroupResource($group),
        ]);
    }

    /**
     * Update the specified group.
     */
    public function update(Request $request, Group $group): JsonResponse
    {
        // Check authorization
        if (!auth()->user()->canManageGroup($group) && !auth()->user()->hasPermission('manage-any-groups')) {
            throw new AuthorizationException('You do not have permission to manage this group');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'type' => 'sometimes|required|in:public,private,secret',
            'avatar' => 'nullable|string|max:255',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $group->update($request->only([
            'name', 'description', 'type', 'avatar', 'is_active'
        ]));

        $group->load(['creator', 'members']);

        return response()->json([
            'success' => true,
            'message' => 'Group updated successfully',
            'data' => new GroupResource($group),
        ]);
    }

    /**
     * Remove the specified group.
     */
    public function destroy(Group $group): JsonResponse
    {
        // Check authorization
        if (!auth()->user()->isOwnerOfGroup($group) && !auth()->user()->hasPermission('manage-any-groups')) {
            throw new AuthorizationException('Only group owners can delete groups');
        }

        $group->delete();

        return response()->json([
            'success' => true,
            'message' => 'Group deleted successfully',
        ]);
    }

    /**
     * Join a group.
     */
    public function join(Group $group): JsonResponse
    {
        if (!$group->canBeJoinedBy(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot join this group',
            ], 403);
        }

        if ($group->hasMember(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'You are already a member of this group',
            ], 422);
        }

        $group->addMember(auth()->user());

        return response()->json([
            'success' => true,
            'message' => 'Joined group successfully',
        ]);
    }

    /**
     * Leave a group.
     */
    public function leave(Group $group): JsonResponse
    {
        if (!$group->hasMember(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'You are not a member of this group',
            ], 422);
        }

        if ($group->isOwner(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'Group owners cannot leave their own group',
            ], 422);
        }

        $group->removeMember(auth()->user());

        return response()->json([
            'success' => true,
            'message' => 'Left group successfully',
        ]);
    }

    /**
     * Get group members.
     */
    public function members(Request $request, Group $group): JsonResponse
    {
        if (!$group->canBeViewedBy(auth()->user())) {
            return response()->json([
                'success' => false,
                'message' => 'Group not found or access denied',
            ], 404);
        }

        $query = $group->members()->withPivot('role', 'joined_at');

        if ($request->filled('role')) {
            $query->wherePivot('role', $request->role);
        }

        match ($request->input('sort', 'joined')) {
            'name' => $query->orderBy('name'),
            'role' => $query->orderByRaw("CASE pivot_role WHEN 'owner' THEN 1 WHEN 'admin' THEN 2 WHEN 'moderator' THEN 3 ELSE 4 END"),
            default => $query->orderBy('pivot_joined_at', 'desc'),
        };

        $members = $query->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => $members->map(function ($member) {
                return [
                    'id' => $member->id,
                    'name' => $member->name,
                    'avatar' => $member->avatar,
                    'join_date' => $member->join_date_formatted,
                    'role' => $member->pivot->role,
                    'joined_at' => $member->pivot->joined_at,
                ];
            }),
            'meta' => [
                'total' => $members->total(),
                'per_page' => $members->perPage(),
                'current_page' => $members->currentPage(),
                'last_page' => $members->lastPage(),
            ],
        ]);
    }
}