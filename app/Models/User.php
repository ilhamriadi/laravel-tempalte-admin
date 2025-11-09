<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users'; // Specify the table name if it's not pluralized

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'join_date',
        'role_name',
        'status',
        'last_login',
        'bio',
        'location',
        'website',
        'twitter',
        'github',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'join_date' => 'datetime',
        'last_login' => 'datetime',
    ];

    /** generate id */
    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $latestUser = self::orderBy('user_id', 'desc')->first();
            $nextID = $latestUser ? intval(substr($latestUser->user_id, 3)) + 1 : 1;
            $model->user_id = 'KH-' . sprintf("%04d", $nextID);

            // Ensure the user_id is unique
            while (self::where('user_id', $model->user_id)->exists()) {
                $nextID++;
                $model->user_id = 'KH-' . sprintf("%04d", $nextID);
            }
        });
    }

    /** Insert New Users */
    public function saveNewuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email',
            'password'  => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'This email is already registered. Please use another.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please fix the errors below.');
        }

        try {
            $todayDate = Carbon::now()->toDayDateTimeString();
            $save             = new User;
            $save->name       = $request->name;
            $save->avatar     = $request->image;
            $save->email      = $request->email;
            $save->join_date  = $todayDate;
            $save->role_name  = 'User';
            $save->status     = 'Active';
            $save->password   = Hash::make($request->password);
            $save->save();
            return redirect('login')->with('success', 'Account created successfully :)');
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect()->back()->with('error', 'Failed to Create Account. Please try again.');
        }
    }

    // Forum Relationships
    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class)->latest();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_members')
            ->withPivot('role', 'joined_at')
            ->withTimestamps();
    }

    public function ownedGroups(): HasMany
    {
        return $this->hasMany(Group::class, 'created_by');
    }

    public function groupMemberships(): HasMany
    {
        return $this->hasMany(GroupMember::class);
    }

    public function notificationPreferences(): HasMany
    {
        return $this->hasMany(NotificationPreference::class);
    }

    // Forum Helper Methods
    public function getThreadsCountAttribute(): int
    {
        return $this->threads()->count();
    }

    public function getCommentsCountAttribute(): int
    {
        return $this->comments()->count();
    }

    public function getLikesReceivedAttribute(): int
    {
        return $this->threads()->withCount('likes')->get()->sum('likes_count') +
               $this->comments()->withCount('likes')->get()->sum('likes_count');
    }

    public function getJoinDateFormattedAttribute(): string
    {
        return $this->join_date ? $this->join_date->format('F Y') : 'Unknown';
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isModerator(): bool
    {
        return $this->hasRole(['admin', 'moderator']);
    }

    public function canModerateForum(?Forum $forum = null): bool
    {
        if ($this->isAdmin()) return true;

        if (!$forum) return false;

        // Check if user is moderator of any group that has access to this forum
        return $this->groups()
            ->wherePivotIn('role', ['owner', 'admin', 'moderator'])
            ->exists();
    }

    public function canManageGroup(?Group $group = null): bool
    {
        if (!$group) return false;

        $memberRole = $group->getMemberRole($this);
        return in_array($memberRole, ['owner', 'admin', 'moderator']);
    }

    public function isOwnerOfGroup(?Group $group = null): bool
    {
        if (!$group) return false;

        return $group->created_by === $this->id;
    }

    public function getNotificationPreference(string $type): NotificationPreference
    {
        return NotificationPreference::getOrCreate($this, $type);
    }

    public function hasNotificationEnabled(string $type, string $channel = 'email'): bool
    {
        $preference = $this->getNotificationPreference($type);

        return match($channel) {
            'email' => $preference->email_enabled,
            'push' => $preference->push_enabled,
            default => false,
        };
    }

    public function updateNotificationPreference(string $type, array $settings): bool
    {
        $preference = $this->getNotificationPreference($type);

        return $preference->update($settings);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }

    public function scopeByRole($query, $role)
    {
        return $query->where('role_name', $role);
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}