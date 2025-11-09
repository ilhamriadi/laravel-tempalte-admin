<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotificationPreference extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'email_enabled',
        'push_enabled',
    ];

    protected $casts = [
        'email_enabled' => 'boolean',
        'push_enabled' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeEmailEnabled($query)
    {
        return $query->where('email_enabled', true);
    }

    public function scopePushEnabled($query)
    {
        return $query->where('push_enabled', true);
    }

    public static function getOrCreate(User $user, string $type): self
    {
        return static::firstOrCreate([
            'user_id' => $user->id,
            'type' => $type,
        ], [
            'email_enabled' => true,
            'push_enabled' => true,
        ]);
    }

    public static function getDefaultTypes(): array
    {
        return [
            'new_comment',
            'thread_reply',
            'comment_reply',
            'group_invitation',
            'group_approval',
            'mention',
            'system_announcement',
        ];
    }
}