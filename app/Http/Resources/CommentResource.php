<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'content' => $this->content,
            'depth' => $this->depth,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            // Relationships
            'thread' => $this->when($this->relationLoaded('thread'), [
                'id' => $this->thread->id,
                'title' => $this->thread->title,
                'slug' => $this->thread->slug,
            ]),

            'user' => $this->when($this->relationLoaded('user'), [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'avatar' => $this->user->avatar,
                'join_date' => $this->user->join_date_formatted,
            ]),

            'parent' => $this->when($this->relationLoaded('parent'), function () {
                return $this->parent ? [
                    'id' => $this->parent->id,
                    'content' => str_limit(strip_tags($this->parent->content), 100),
                    'user' => [
                        'id' => $this->parent->user->id,
                        'name' => $this->parent->user->name,
                    ],
                ] : null;
            }),

            // Counts
            'likes_count' => $this->likes_count,
            'upvotes_count' => $this->when($this->relationLoaded('upvotes'), $this->upvotes_count),
            'downvotes_count' => $this->when($this->relationLoaded('downvotes'), $this->downvotes_count),
            'score' => $this->when($this->relationLoaded('upvotes') || $this->relationLoaded('downvotes'), $this->score),
            'replies_count' => $this->when($this->relationLoaded('replies'), $this->replies->count()),

            // User interactions
            'is_liked' => auth()->check() ? $this->isLikedBy(auth()->user()) : false,
            'user_vote' => auth()->check() ? $this->isVotedBy(auth()->user()) : null,
            'is_reply_to_user' => auth()->check() ? $this->isReplyTo(auth()->user()) : false,

            // Nested replies
            'replies' => $this->when($this->relationLoaded('replies'), function () {
                return $this->replies->map(function ($reply) {
                    return [
                        'id' => $reply->id,
                        'content' => $reply->content,
                        'depth' => $reply->depth,
                        'created_at' => $reply->created_at,
                        'updated_at' => $reply->updated_at,
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
                        'replies_count' => $reply->replies->count(),
                    ];
                });
            }),

            // Permissions
            'can_edit' => $this->when(auth()->check(), function () {
                return $this->canBeEditedBy(auth()->user());
            }),
            'can_delete' => $this->when(auth()->check(), function () {
                return $this->canBeDeletedBy(auth()->user());
            }),
            'can_reply' => $this->when(auth()->check(), function () {
                return !$this->thread->is_locked || auth()->user()->canModerateForum();
            }),

            // Metadata
            'is_edited' => $this->updated_at->diffInMinutes($this->created_at) > 1,
            'time_since_created' => $this->created_at->diffForHumans(),
        ];
    }
}