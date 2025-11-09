<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
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
            'type' => $this->type,
            'is_active' => $this->is_active,
            'avatar' => $this->avatar,
            'members_count' => $this->members_count,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            // Relationships
            'creator' => $this->when($this->relationLoaded('creator'), [
                'id' => $this->creator->id,
                'name' => $this->creator->name,
                'avatar' => $this->creator->avatar,
            ]),

            'members' => $this->when($this->relationLoaded('members'), function () {
                return $this->members->take(10)->map(function ($member) {
                    return [
                        'id' => $member->id,
                        'name' => $member->name,
                        'avatar' => $member->avatar,
                        'role' => $member->pivot->role,
                        'joined_at' => $member->pivot->joined_at,
                    ];
                });
            }),

            'threads' => $this->when($this->relationLoaded('threads'), function () {
                return $this->threads->map(function ($thread) {
                    return [
                        'id' => $thread->id,
                        'title' => $thread->title,
                        'slug' => $thread->slug,
                        'created_at' => $thread->created_at,
                        'comments_count' => $thread->comments_count,
                        'user' => [
                            'id' => $thread->user->id,
                            'name' => $thread->user->name,
                        ],
                    ];
                });
            }),

            // User relationship
            'is_member' => auth()->check() ? $this->hasMember(auth()->user()) : false,
            'user_role' => auth()->check() ? $this->getMemberRole(auth()->user()) : null,
            'is_owner' => auth()->check() ? $this->isOwner(auth()->user()) : false,
            'is_admin' => auth()->check() ? $this->isAdmin(auth()->user()) : false,
            'is_moderator' => auth()->check() ? $this->isModerator(auth()->user()) : false,

            // Permissions
            'can_join' => auth()->check() ? $this->canBeJoinedBy(auth()->user()) : false,
            'can_leave' => auth()->check() ? ($this->hasMember(auth()->user()) && !$this->isOwner(auth()->user())) : false,
            'can_manage' => auth()->check() ? $this->canManageGroup(auth()->user()) : false,
            'can_edit' => auth()->check() ? ($this->canManageGroup(auth()->user()) || auth()->user()->hasPermission('manage-any-groups')) : false,
            'can_delete' => auth()->check() ? ($this->isOwner(auth()->user()) || auth()->user()->hasPermission('manage-any-groups')) : false,

            // Metadata
            'type_label' => $this->type === 'public' ? 'Public' : ($this->type === 'private' ? 'Private' : 'Secret'),
            'is_public' => $this->type === 'public',
        ];
    }
}