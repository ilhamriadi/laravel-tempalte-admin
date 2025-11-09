<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThreadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->when($request->routeIs('threads.show'), $this->content),
            'excerpt' => $this->when(!$request->routeIs('threads.show'), str_limit(strip_tags($this->content), 200)),
            'is_pinned' => $this->is_pinned,
            'is_locked' => $this->is_locked,
            'views' => $this->views,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'last_reply_at' => $this->last_reply_at,

            // Relationships
            'forum' => $this->when($this->relationLoaded('forum'), [
                'id' => $this->forum->id,
                'name' => $this->forum->name,
                'slug' => $this->forum->slug,
                'category' => $this->forum->category,
            ]),

            'user' => $this->when($this->relationLoaded('user'), [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'avatar' => $this->user->avatar,
                'join_date' => $this->user->join_date_formatted,
            ]),

            'last_reply_by' => $this->when($this->relationLoaded('lastRepliedBy'), function () {
                return $this->lastRepliedBy ? [
                    'id' => $this->lastRepliedBy->id,
                    'name' => $this->lastRepliedBy->name,
                ] : null;
            }),

            // Counts
            'comments_count' => $this->when(isset($this->comments_count), $this->comments_count),
            'likes_count' => $this->when(isset($this->likes_count), $this->likes_count),
            'upvotes_count' => $this->when($this->relationLoaded('upvotes'), $this->upvotes_count),
            'downvotes_count' => $this->when($this->relationLoaded('downvotes'), $this->downvotes_count),
            'score' => $this->when($this->relationLoaded('upvotes') || $this->relationLoaded('downvotes'), $this->score),

            // User interactions
            'is_liked' => $this->when(auth()->check(), $this->isLikedBy(auth()->user())),
            'user_vote' => $this->when(auth()->check(), $this->isVotedBy(auth()->user())),

            // Comments (only for thread detail view)
            'comments' => $this->when($this->relationLoaded('comments'), function () {
                return $this->comments->map(function ($comment) {
                    return [
                        'id' => $comment->id,
                        'content' => $comment->content,
                        'created_at' => $comment->created_at,
                        'updated_at' => $comment->updated_at,
                        'depth' => $comment->depth,
                        'user' => [
                            'id' => $comment->user->id,
                            'name' => $comment->user->name,
                            'avatar' => $comment->user->avatar,
                        ],
                        'likes_count' => $comment->likes_count,
                        'upvotes_count' => $comment->upvotes_count,
                        'downvotes_count' => $comment->downvotes_count,
                        'score' => $comment->score,
                        'is_liked' => auth()->check() ? $comment->isLikedBy(auth()->user()) : false,
                        'user_vote' => auth()->check() ? $comment->isVotedBy(auth()->user()) : null,
                        'replies' => $comment->replies->map(function ($reply) {
                            return [
                                'id' => $reply->id,
                                'content' => $reply->content,
                                'created_at' => $reply->created_at,
                                'updated_at' => $reply->updated_at,
                                'depth' => $reply->depth,
                                'user' => [
                                    'id' => $reply->user->id,
                                    'name' => $reply->user->name,
                                    'avatar' => $reply->user->avatar,
                                ],
                                'likes_count' => $reply->likes_count,
                                'upvotes_count' => $reply->upvotes_count,
                                'downvotes_count' => $reply->downvotes_count,
                                'score' => $reply->score,
                                'is_liked' => auth()->check() ? $reply->isLikedBy(auth()->user()) : false,
                                'user_vote' => auth()->check() ? $reply->isVotedBy(auth()->user()) : null,
                            ];
                        }),
                    ];
                });
            }),

            // Permissions
            'can_edit' => $this->when(auth()->check(), function () {
                return auth()->id() === $this->user_id || auth()->user()->canModerateForum();
            }),
            'can_delete' => $this->when(auth()->check(), function () {
                return auth()->id() === $this->user_id || auth()->user()->canModerateForum();
            }),
            'can_reply' => $this->when(auth()->check(), function () {
                return !$this->is_locked || auth()->user()->canModerateForum();
            }),
        ];
    }
}