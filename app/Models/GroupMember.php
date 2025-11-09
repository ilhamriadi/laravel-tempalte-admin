<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'user_id',
        'role',
        'joined_at',
    ];

    protected $casts = [
        'joined_at' => 'datetime',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isOwner(): bool
    {
        return $this->role === 'owner';
    }

    public function isAdmin(): bool
    {
        return in_array($this->role, ['owner', 'admin']);
    }

    public function isModerator(): bool
    {
        return in_array($this->role, ['owner', 'admin', 'moderator']);
    }

    public function canManageGroup(): bool
    {
        return $this->isModerator();
    }

    public function canManageMembers(): bool
    {
        return $this->isAdmin();
    }

    public function canDeleteGroup(): bool
    {
        return $this->isOwner();
    }

    public function scopeByRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeModerators($query)
    {
        return $query->whereIn('role', ['owner', 'admin', 'moderator']);
    }

    public function scopeRegularMembers($query)
    {
        return $query->where('role', 'member');
    }
}