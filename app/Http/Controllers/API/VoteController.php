<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Vote on a thread or comment.
     */
    public function vote(Request $request): JsonResponse
    {
        $request->validate([
            'votable_type' => 'required|in:thread,comment',
            'votable_id' => 'required|integer',
            'vote_type' => 'required|in:up,down',
        ]);

        $user = auth()->user();
        $votableType = $request->votable_type;
        $votableId = $request->votable_id;
        $voteType = $request->vote_type;

        // Find the model
        $model = match($votableType) {
            'thread' => Thread::find($votableId),
            'comment' => Comment::find($votableId),
            default => null,
        };

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Content not found',
            ], 404);
        }

        // Check if user already voted
        $existingVote = Vote::where('user_id', $user->id)
                           ->where('votable_type', get_class($model))
                           ->where('votable_id', $model->id)
                           ->first();

        if ($existingVote) {
            if ($existingVote->vote_type === $voteType) {
                // Remove vote if same type
                $existingVote->delete();
                $userVote = null;
                $message = 'Vote removed';
            } else {
                // Change vote type
                $existingVote->update(['vote_type' => $voteType]);
                $userVote = $voteType;
                $message = 'Vote changed to ' . $voteType;
            }
        } else {
            // Add new vote
            Vote::create([
                'user_id' => $user->id,
                'votable_type' => get_class($model),
                'votable_id' => $model->id,
                'vote_type' => $voteType,
            ]);
            $userVote = $voteType;
            $message = 'Vote recorded';
        }

        // Get updated vote counts
        $upvotesCount = $model->upvotes()->count();
        $downvotesCount = $model->downvotes()->count();
        $score = $upvotesCount - $downvotesCount;

        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => [
                'user_vote' => $userVote,
                'upvotes_count' => $upvotesCount,
                'downvotes_count' => $downvotesCount,
                'score' => $score,
                'votable_type' => $votableType,
                'votable_id' => $votableId,
            ],
        ]);
    }

    /**
     * Get votes for a specific content.
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'votable_type' => 'required|in:thread,comment',
            'votable_id' => 'required|integer',
        ]);

        $votableType = $request->votable_type;
        $votableId = $request->votable_id;

        $model = match($votableType) {
            'thread' => Thread::find($votableId),
            'comment' => Comment::find($votableId),
            default => null,
        };

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Content not found',
            ], 404);
        }

        $query = $model->votes()->with('user');

        if ($request->filled('type')) {
            $query->where('vote_type', $request->type);
        }

        $votes = $query->orderBy('created_at', 'desc')
                      ->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => [
                'votable_type' => $votableType,
                'votable_id' => $votableId,
                'upvotes_count' => $model->upvotes()->count(),
                'downvotes_count' => $model->downvotes()->count(),
                'score' => $model->upvotes()->count() - $model->downvotes()->count(),
                'votes' => $votes->map(function ($vote) {
                    return [
                        'id' => $vote->id,
                        'vote_type' => $vote->vote_type,
                        'user' => [
                            'id' => $vote->user->id,
                            'name' => $vote->user->name,
                            'avatar' => $vote->user->avatar,
                        ],
                        'created_at' => $vote->created_at,
                    ];
                }),
            ],
            'meta' => [
                'total' => $votes->total(),
                'per_page' => $votes->perPage(),
                'current_page' => $votes->currentPage(),
                'last_page' => $votes->lastPage(),
            ],
        ]);
    }

    /**
     * Remove a specific vote.
     */
    public function destroy(Request $request, Vote $vote): JsonResponse
    {
        // Only the user who created the vote can remove it
        if ($vote->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        $votableType = class_basename($vote->votable_type);
        $votableId = $vote->votable_id;

        $vote->delete();

        return response()->json([
            'success' => true,
            'message' => 'Vote removed',
            'data' => [
                'votable_type' => strtolower($votableType),
                'votable_id' => $votableId,
            ],
        ]);
    }

    /**
     * Get user's voting history.
     */
    public function userVotes(Request $request): JsonResponse
    {
        $user = auth()->user();

        $query = $user->votes()->with(['votable']);

        if ($request->filled('type')) {
            $query->where('vote_type', $request->type);
        }

        if ($request->filled('votable_type')) {
            $modelClass = match($request->votable_type) {
                'thread' => Thread::class,
                'comment' => Comment::class,
                default => null,
            };
            if ($modelClass) {
                $query->where('votable_type', $modelClass);
            }
        }

        $votes = $query->orderBy('created_at', 'desc')
                      ->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => $votes->map(function ($vote) {
                return [
                    'id' => $vote->id,
                    'vote_type' => $vote->vote_type,
                    'votable_type' => class_basename($vote->votable_type),
                    'votable_id' => $vote->votable_id,
                    'votable' => [
                        'id' => $vote->votable->id,
                        'title' => $vote->votable_type === Thread::class ? $vote->votable->title : null,
                        'content' => $vote->votable_type === Comment::class ? str_limit(strip_tags($vote->votable->content), 100) : null,
                    ],
                    'created_at' => $vote->created_at,
                ];
            }),
            'meta' => [
                'total' => $votes->total(),
                'per_page' => $votes->perPage(),
                'current_page' => $votes->currentPage(),
                'last_page' => $votes->lastPage(),
            ],
        ]);
    }
}