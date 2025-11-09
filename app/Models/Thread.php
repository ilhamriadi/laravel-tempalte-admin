<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Thread extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'forum_id',
        'user_id',
        'title',
        'slug',
        'content',
        'is_pinned',
        'is_locked',
        'views',
        'last_reply_at',
        'last_reply_by',
    ];

    protected $casts = [
        'is_pinned' => 'boolean',
        'is_locked' => 'boolean',
        'views' => 'integer',
        'last_reply_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($thread) {
            if (empty($thread->slug)) {
                $thread->slug = Str::slug($thread->title);
            }
        });

        static::updating(function ($thread) {
            if ($thread->isDirty('title') && empty($thread->slug)) {
                $thread->slug = Str::slug($thread->title);
            }
        });

        static::created(function ($thread) {
            $thread->forum()->increment('threads_count');
        });
    }

    public function forum(): BelongsTo
    {
        return $this->belongsTo(Forum::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lastRepliedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_reply_by');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'asc');
    }

    public function rootComments(): HasMany
    {
        return $this->comments()->whereNull('parent_id')->orderBy('created_at', 'asc');
    }

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function votes(): MorphMany
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    public function upvotes(): MorphMany
    {
        return $this->votes()->where('vote_type', 'up');
    }

    public function downvotes(): MorphMany
    {
        return $this->votes()->where('vote_type', 'down');
    }

    public function isLikedBy(?User $user): bool
    {
        if (!$user) return false;
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function isVotedBy(?User $user): ?string
    {
        if (!$user) return null;
        $vote = $this->votes()->where('user_id', $user->id)->first();
        return $vote ? $vote->vote_type : null;
    }

    public function incrementView()
    {
        $this->increment('views');
    }

    public function updateLastReply(?Comment $comment = null)
    {
        $this->update([
            'last_reply_at' => $comment?->created_at ?? $this->created_at,
            'last_reply_by' => $comment?->user_id ?? $this->user_id,
        ]);
    }

    public function scopePinned($query)
    {
        return $query->where('is_pinned', true);
    }

    public function scopeNotPinned($query)
    {
        return $query->where('is_pinned', false);
    }

    public function scopeLocked($query)
    {
        return $query->where('is_locked', true);
    }

    public function scopeNotLocked($query)
    {
        return $query->where('is_locked', false);
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments()->count();
    }

    public function getLikesCountAttribute()
    {
        return $this->likes()->count();
    }

    public function getUpvotesCountAttribute()
    {
        return $this->upvotes()->count();
    }

    public function getDownvotesCountAttribute()
    {
        return $this->downvotes()->count();
    }

    public function getScoreAttribute()
    {
        return $this->upvotes_count - $this->downvotes_count;
    }
}