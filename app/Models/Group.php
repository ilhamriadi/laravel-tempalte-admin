<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'type',
        'is_active',
        'created_by',
        'avatar',
        'members_count',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'members_count' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($group) {
            if (empty($group->slug)) {
                $group->slug = Str::slug($group->name);
            }
        });

        static::updating(function ($group) {
            if ($group->isDirty('name') && empty($group->slug)) {
                $group->slug = Str::slug($group->name);
            }
        });
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'group_members')
            ->withPivot('role', 'joined_at')
            ->withTimestamps();
    }

    public function owners(): BelongsToMany
    {
        return $this->members()->wherePivot('role', 'owner');
    }

    public function admins(): BelongsToMany
    {
        return $this->members()->wherePivot('role', 'admin');
    }

    public function moderators(): BelongsToMany
    {
        return $this->members()->wherePivotIn('role', ['owner', 'admin', 'moderator']);
    }

    public function regularMembers(): BelongsToMany
    {
        return $this->members()->wherePivot('role', 'member');
    }

    public function groupMembers(): HasMany
    {
        return $this->hasMany(GroupMember::class);
    }

    public function hasMember(?User $user): bool
    {
        if (!$user) return false;
        return $this->members()->where('user_id', $user->id)->exists();
    }

    public function getMemberRole(?User $user): ?string
    {
        if (!$user) return null;
        $member = $this->members()->where('user_id', $user->id)->first();
        return $member?->pivot->role;
    }

    public function isOwner(?User $user): bool
    {
        return $this->getMemberRole($user) === 'owner';
    }

    public function isAdmin(?User $user): bool
    {
        return in_array($this->getMemberRole($user), ['owner', 'admin']);
    }

    public function isModerator(?User $user): bool
    {
        return in_array($this->getMemberRole($user), ['owner', 'admin', 'moderator']);
    }

    public function canBeJoinedBy(?User $user): bool
    {
        if (!$user || !$this->is_active) return false;

        if ($this->hasMember($user)) return false;

        return match($this->type) {
            'public' => true,
            'private' => false, // Requires invitation
            'secret' => false,  // Cannot be discovered
            default => false,
        };
    }

    public function canBeViewedBy(?User $user): bool
    {
        if (!$user) return false;

        if ($this->hasMember($user)) return true;

        return match($this->type) {
            'public' => true,
            'private' => false, // Members only
            'secret' => false,  // Members only
            default => false,
        };
    }

    public function addMember(User $user, string $role = 'member'): bool
    {
        if ($this->hasMember($user)) return false;

        $this->members()->attach($user->id, ['role' => $role, 'joined_at' => now()]);
        $this->increment('members_count');

        return true;
    }

    public function removeMember(User $user): bool
    {
        if (!$this->hasMember($user)) return false;

        $this->members()->detach($user->id);
        $this->decrement('members_count');

        return true;
    }

    public function updateMemberRole(User $user, string $role): bool
    {
        if (!$this->hasMember($user)) return false;

        $this->members()->updateExistingPivot($user->id, ['role' => $role]);

        return true;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopePublic($query)
    {
        return $query->where('type', 'public');
    }

    public function scopePrivate($query)
    {
        return $query->whereIn('type', ['private', 'secret']);
    }

    public function scopeAccessibleBy($query, ?User $user)
    {
        if (!$user) {
            return $query->public();
        }

        return $query->where(function ($q) use ($user) {
            $q->where('type', 'public')
              ->orWhereHas('members', function ($q) use ($user) {
                  $q->where('user_id', $user->id);
              });
        });
    }
}