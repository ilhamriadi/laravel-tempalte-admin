<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Http\Resources\ForumResource;
use App\Http\Resources\ForumCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('permission:create-groups')->only('store');
        $this->middleware('permission:manage-any-groups')->only(['update', 'destroy']);
    }

    /**
     * Display a listing of the forums.
     */
    public function index(Request $request): JsonResponse
    {
        $forums = Forum::active()
            ->ordered()
            ->withCount(['threads' => function ($query) {
                $query->whereNotNull('id');
            }])
            ->get();

        return response()->json([
            'success' => true,
            'data' => new ForumCollection($forums),
        ]);
    }

    /**
     * Store a newly created forum.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'category' => 'required|string|in:general,announcements,support,feedback',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $forum = Forum::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Forum created successfully',
            'data' => new ForumResource($forum),
        ], 201);
    }

    /**
     * Display the specified forum.
     */
    public function show(Forum $forum): JsonResponse
    {
        if (!$forum->is_active && !auth()->user()?->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'Forum not found',
            ], 404);
        }

        $forum->load(['threads' => function ($query) {
            $query->with(['user', 'lastRepliedBy'])
                  ->withCount(['comments', 'likes'])
                  ->orderBy('is_pinned', 'desc')
                  ->orderBy('last_reply_at', 'desc')
                  ->limit(10);
        }]);

        return response()->json([
            'success' => true,
            'data' => new ForumResource($forum),
        ]);
    }

    /**
     * Update the specified forum.
     */
    public function update(Request $request, Forum $forum): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'category' => 'sometimes|required|string|in:general,announcements,support,feedback',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $forum->update($request->only([
            'name', 'description', 'category', 'sort_order', 'is_active'
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Forum updated successfully',
            'data' => new ForumResource($forum),
        ]);
    }

    /**
     * Remove the specified forum.
     */
    public function destroy(Forum $forum): JsonResponse
    {
        $forum->delete();

        return response()->json([
            'success' => true,
            'message' => 'Forum deleted successfully',
        ]);
    }
}