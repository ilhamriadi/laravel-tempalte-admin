<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use App\Models\Forum;
use App\Http\Resources\ThreadResource;
use App\Http\Resources\ThreadCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Access\AuthorizationException;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('permission:create-threads')->only('store');
        $this->middleware('permission:edit-own-threads')->only('update')->except('pin', 'lock');
        $this->middleware('permission:edit-any-threads')->only(['update', 'pin', 'lock']);
        $this->middleware('permission:delete-own-threads')->only('destroy');
        $this->middleware('permission:delete-any-threads')->only('forceDestroy');
    }

    /**
     * Display a listing of threads.
     */
    public function index(Request $request, Forum $forum = null): JsonResponse
    {
        $query = Thread::with(['user', 'forum'])
                      ->withCount(['comments', 'likes']);

        if ($forum) {
            $query->where('forum_id', $forum->id);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->boolean('pinned_only')) {
            $query->pinned();
        }

        if ($request->filled('sort')) {
            match ($request->sort) {
                'latest' => $query->orderBy('created_at', 'desc'),
                'oldest' => $query->orderBy('created_at', 'asc'),
                'popular' => $query->orderBy('views', 'desc'),
                'most_replies' => $query->orderBy('comments_count', 'desc'),
                default => $query->orderBy('last_reply_at', 'desc'),
            };
        } else {
            $query->orderBy('is_pinned', 'desc')->orderBy('last_reply_at', 'desc');
        }

        $threads = $query->paginate($request->input('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => new ThreadCollection($threads),
        ]);
    }

    /**
     * Store a newly created thread.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'forum_id' => 'required|exists:forums,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:10|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $forum = Forum::findOrFail($request->forum_id);

        if (!$forum->is_active && !auth()->user()->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot create thread in inactive forum',
            ], 403);
        }

        $thread = Thread::create([
            'forum_id' => $request->forum_id,
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'is_pinned' => false,
            'is_locked' => false,
        ]);

        $thread->load(['user', 'forum']);

        return response()->json([
            'success' => true,
            'message' => 'Thread created successfully',
            'data' => new ThreadResource($thread),
        ], 201);
    }

    /**
     * Display the specified thread.
     */
    public function show(Thread $thread): JsonResponse
    {
        $thread->incrementView();

        $thread->load([
            'user',
            'forum',
            'comments' => function ($query) {
                $query->with(['user', 'replies' => function ($q) {
                    $q->with('user')->orderBy('created_at', 'asc');
                }])
                ->whereNull('parent_id')
                ->orderBy('created_at', 'asc');
            }
        ]);

        return response()->json([
            'success' => true,
            'data' => new ThreadResource($thread),
        ]);
    }

    /**
     * Update the specified thread.
     */
    public function update(Request $request, Thread $thread): JsonResponse
    {
        // Check authorization
        if (auth()->id() !== $thread->user_id && !auth()->user()->canModerateForum()) {
            throw new AuthorizationException('You can only edit your own threads');
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string|min:10|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $thread->update($request->only(['title', 'content']));

        $thread->load(['user', 'forum']);

        return response()->json([
            'success' => true,
            'message' => 'Thread updated successfully',
            'data' => new ThreadResource($thread),
        ]);
    }

    /**
     * Remove the specified thread.
     */
    public function destroy(Thread $thread): JsonResponse
    {
        // Check authorization
        if (auth()->id() !== $thread->user_id && !auth()->user()->canModerateForum()) {
            throw new AuthorizationException('You can only delete your own threads');
        }

        $thread->delete();

        return response()->json([
            'success' => true,
            'message' => 'Thread deleted successfully',
        ]);
    }

    /**
     * Pin or unpin a thread.
     */
    public function pin(Thread $thread): JsonResponse
    {
        $this->authorize('pin-threads');

        $thread->update(['is_pinned' => !$thread->is_pinned]);

        return response()->json([
            'success' => true,
            'message' => $thread->is_pinned ? 'Thread pinned successfully' : 'Thread unpinned successfully',
            'data' => ['is_pinned' => $thread->is_pinned],
        ]);
    }

    /**
     * Lock or unlock a thread.
     */
    public function lock(Thread $thread): JsonResponse
    {
        $this->authorize('lock-threads');

        $thread->update(['is_locked' => !$thread->is_locked]);

        return response()->json([
            'success' => true,
            'message' => $thread->is_locked ? 'Thread locked successfully' : 'Thread unlocked successfully',
            'data' => ['is_locked' => $thread->is_locked],
        ]);
    }

    /**
     * Force delete a thread (admin only).
     */
    public function forceDestroy(Thread $thread): JsonResponse
    {
        $this->authorize('delete-any-threads');

        $thread->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Thread permanently deleted',
        ]);
    }
}