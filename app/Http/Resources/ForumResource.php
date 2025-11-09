<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForumResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'category' => $this->category,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
            'threads_count' => $this->when(isset($this->threads_count), $this->threads_count),
            'posts_count' => $this->when($this->relationLoaded('threads'), function () {
                return $this->threads->sum(function ($thread) {
                    return $thread->comments_count + 1; // +1 for the thread itself
                });
            }),
            'latest_thread' => $this->when($this->relationLoaded('threads'), function () {
                $latestThread = $this->threads->first();
                return $latestThread ? [
                    'id' => $latestThread->id,
                    'title' => $latestThread->title,
                    'slug' => $latestThread->slug,
                    'last_reply_at' => $latestThread->last_reply_at,
                    'last_reply_by' => $latestThread->lastRepliedBy ? [
                        'id' => $latestThread->lastRepliedBy->id,
                        'name' => $latestThread->lastRepliedBy->name,
                    ] : null,
                ] : null;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}