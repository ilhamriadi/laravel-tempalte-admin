<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($forum) {
            if (empty($forum->slug)) {
                $forum->slug = Str::slug($forum->name);
            }
        });

        static::updating(function ($forum) {
            if ($forum->isDirty('name') && empty($forum->slug)) {
                $forum->slug = Str::slug($forum->name);
            }
        });
    }

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class)->orderBy('is_pinned', 'desc')->orderBy('last_reply_at', 'desc');
    }

    public function activeThreads(): HasMany
    {
        return $this->threads()->where('is_locked', false);
    }

    public function threadsCount(): int
    {
        return $this->threads()->count();
    }

    public function postsCount(): int
    {
        return $this->threads()->withCount('comments')->get()->sum('comments_count');
    }

    public function getLatestThreadAttribute()
    {
        return $this->threads()->latest('last_reply_at')->first();
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('name', 'asc');
    }
}