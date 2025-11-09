<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'votable_id',
        'votable_type',
        'vote_type',
    ];

    protected $casts = [
        'vote_type' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function votable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isUpvote(): bool
    {
        return $this->vote_type === 'up';
    }

    public function isDownvote(): bool
    {
        return $this->vote_type === 'down';
    }

    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeForModel($query, $model)
    {
        return $query->where('votable_type', get_class($model))
                    ->where('votable_id', $model->id);
    }

    public function scopeUpvotes($query)
    {
        return $query->where('vote_type', 'up');
    }

    public function scopeDownvotes($query)
    {
        return $query->where('vote_type', 'down');
    }
}