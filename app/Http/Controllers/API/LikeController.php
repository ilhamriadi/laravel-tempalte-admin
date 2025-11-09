<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Toggle like on a thread or comment.
     */
    public function toggle(Request $request): JsonResponse
    {
        $request->validate([
            'likeable_type' => 'required|in:thread,comment',
            'likeable_id' => 'required|integer',
        ]);

        $user = auth()->user();
        $likeableType = $request->likeable_type;
        $likeableId = $request->likeable_id;

        // Find the model
        $model = match($likeableType) {
            'thread' => Thread::find($likeableId),
            'comment' => Comment::find($likeableId),
            default => null,
        };

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Content not found',
            ], 404);
        }

        // Check if user already liked this
        $existingLike = Like::where('user_id', $user->id)
                           ->where('likeable_type', get_class($model))
                           ->where('likeable_id', $model->id)
                           ->first();

        if ($existingLike) {
            // Remove like
            $existingLike->delete();
            $isLiked = false;
            $message = 'Like removed';
        } else {
            // Add like
            Like::create([
                'user_id' => $user->id,
                'likeable_type' => get_class($model),
                'likeable_id' => $model->id,
            ]);
            $isLiked = true;
            $message = 'Content liked';
        }

        // Update like count on the model if it has the column
        if (isset($model->likes_count)) {
            $model->update(['likes_count' => $model->likes()->count()]);
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => [
                'is_liked' => $isLiked,
                'likes_count' => $model->likes()->count(),
                'likeable_type' => $likeableType,
                'likeable_id' => $likeableId,
            ],
        ]);
    }

    /**
     * Get likes for a specific content.
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'likeable_type' => 'required|in:thread,comment',
            'likeable_id' => 'required|integer',
        ]);

        $likeableType = $request->likeable_type;
        $likeableId = $request->likeable_id;

        $model = match($likeableType) {
            'thread' => Thread::find($likeableId),
            'comment' => Comment::find($likeableId),
            default => null,
        };

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Content not found',
            ], 404);
        }

        $likes = $model->likes()
                      ->with('user')
                      ->orderBy('created_at', 'desc')
                      ->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => [
                'likeable_type' => $likeableType,
                'likeable_id' => $likeableId,
                'likes_count' => $model->likes()->count(),
                'likes' => $likes->map(function ($like) {
                    return [
                        'id' => $like->id,
                        'user' => [
                            'id' => $like->user->id,
                            'name' => $like->user->name,
                            'avatar' => $like->user->avatar,
                        ],
                        'created_at' => $like->created_at,
                    ];
                }),
            ],
            'meta' => [
                'total' => $likes->total(),
                'per_page' => $likes->perPage(),
                'current_page' => $likes->currentPage(),
                'last_page' => $likes->lastPage(),
            ],
        ]);
    }

    /**
     * Remove a specific like.
     */
    public function destroy(Request $request, Like $like): JsonResponse
    {
        // Only the user who created the like can remove it
        if ($like->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        $likeableType = class_basename($like->likeable_type);
        $likeableId = $like->likeable_id;

        $like->delete();

        return response()->json([
            'success' => true,
            'message' => 'Like removed',
            'data' => [
                'likeable_type' => strtolower($likeableType),
                'likeable_id' => $likeableId,
            ],
        ]);
    }
}