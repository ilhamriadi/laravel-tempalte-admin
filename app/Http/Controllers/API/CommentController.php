<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Thread;
use App\Http\Resources\CommentResource;
use App\Http\Resources\CommentCollection;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Access\AuthorizationException;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:create-comments')->only('store', 'reply');
        $this->middleware('permission:edit-own-comments')->only('update');
        $this->middleware('permission:edit-any-comments')->only('update');
        $this->middleware('permission:delete-own-comments')->only('destroy');
        $this->middleware('permission:delete-any-comments')->only('forceDestroy');
    }

    /**
     * Store a newly created comment.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'thread_id' => 'required|exists:threads,id',
            'content' => 'required|string|min:5|max:5000',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $thread = Thread::findOrFail($request->thread_id);

        if ($thread->is_locked && !auth()->user()->canModerateForum()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot reply to locked thread',
            ], 403);
        }

        if ($request->parent_id) {
            $parentComment = Comment::findOrFail($request->parent_id);
            if ($parentComment->thread_id !== $thread->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Parent comment does not belong to this thread',
                ], 422);
            }
        }

        $comment = Comment::create([
            'thread_id' => $request->thread_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
            'parent_id' => $request->parent_id,
        ]);

        $comment->load(['user', 'thread', 'parent.user']);

        return response()->json([
            'success' => true,
            'message' => 'Comment created successfully',
            'data' => new CommentResource($comment),
        ], 201);
    }

    /**
     * Update the specified comment.
     */
    public function update(Request $request, Comment $comment): JsonResponse
    {
        // Check authorization
        if (auth()->id() !== $comment->user_id && !auth()->user()->canModerateForum()) {
            if (!$comment->canBeEditedBy(auth()->user())) {
                throw new AuthorizationException('You can only edit your own comments within 15 minutes');
            }
        }

        $validator = Validator::make($request->all(), [
            'content' => 'required|string|min:5|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $comment->update(['content' => $request->content]);

        $comment->load(['user', 'thread', 'parent.user']);

        return response()->json([
            'success' => true,
            'message' => 'Comment updated successfully',
            'data' => new CommentResource($comment),
        ]);
    }

    /**
     * Remove the specified comment.
     */
    public function destroy(Comment $comment): JsonResponse
    {
        // Check authorization
        if (auth()->id() !== $comment->user_id && !auth()->user()->canModerateForum()) {
            if (!$comment->canBeDeletedBy(auth()->user())) {
                throw new AuthorizationException('You can only delete your own comments');
            }
        }

        $comment->delete();

        return response()->json([
            'success' => true,
            'message' => 'Comment deleted successfully',
        ]);
    }

    /**
     * Reply to a comment.
     */
    public function reply(Request $request, Comment $comment): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string|min:5|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($comment->thread->is_locked && !auth()->user()->canModerateForum()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot reply to locked thread',
            ], 403);
        }

        $reply = Comment::create([
            'thread_id' => $comment->thread_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
            'parent_id' => $comment->id,
        ]);

        $reply->load(['user', 'thread', 'parent.user']);

        return response()->json([
            'success' => true,
            'message' => 'Reply created successfully',
            'data' => new CommentResource($reply),
        ], 201);
    }

    /**
     * Get comments for a thread.
     */
    public function index(Request $request, Thread $thread): JsonResponse
    {
        $query = $thread->comments()
                       ->with(['user', 'replies.user'])
                       ->whereNull('parent_id')
                       ->orderBy('created_at', 'asc');

        if ($request->filled('sort')) {
            match ($request->sort) {
                'popular' => $query->orderBy('likes_count', 'desc'),
                'newest' => $query->orderBy('created_at', 'desc'),
                'oldest' => $query->orderBy('created_at', 'asc'),
                default => $query->orderBy('created_at', 'asc'),
            };
        }

        $comments = $query->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => new CommentCollection($comments),
        ]);
    }

    /**
     * Force delete a comment (admin only).
     */
    public function forceDestroy(Comment $comment): JsonResponse
    {
        $this->authorize('delete-any-comments');

        $comment->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Comment permanently deleted',
        ]);
    }
}