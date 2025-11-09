<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'thread_id',
        'user_id',
        'content',
        'parent_id',
        'depth',
        'likes_count',
    ];

    protected $casts = [
        'depth' => 'integer',
        'likes_count' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            if ($comment->parent_id) {
                $comment->depth = $comment->parent->depth + 1;
            }
        });

        static::created(function ($comment) {
            $comment->thread->updateLastReply($comment);

            // Update parent comment's reply count if needed
            if ($comment->parent_id) {
                $comment->parent->increment('replies_count');
            }
        });
    }

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'asc');
    }

    public function allReplies(): HasMany
    {
        return $this->replies()->with('allReplies');
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

    public function isReplyTo(?User $user): bool
    {
        if (!$user) return false;
        return $this->parent?->user_id === $user->id;
    }

    public function scopeByThread($query, $threadId)
    {
        return $query->where('thread_id', $threadId);
    }

    public function scopeRootLevel($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeByDepth($query, $maxDepth)
    {
        return $query->where('depth', '<=', $maxDepth);
    }

    public function getExcerptAttribute($length = 150)
    {
        return Str::limit(strip_tags($this->content), $length);
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

    public function getRepliesCountAttribute()
    {
        return $this->replies()->count();
    }

    public function canBeEditedBy(?User $user): bool
    {
        if (!$user) return false;

        // User can edit their own comment within 15 minutes
        if ($this->user_id === $user->id && $this->created_at->diffInMinutes(now()) < 15) {
            return true;
        }

        // Moderators and admins can edit any comment
        return $user->hasRole(['moderator', 'admin']);
    }

    public function canBeDeletedBy(?User $user): bool
    {
        if (!$user) return false;

        // User can delete their own comment
        if ($this->user_id === $user->id) {
            return true;
        }

        // Moderators and admins can delete any comment
        return $user->hasRole(['moderator', 'admin']);
    }
}