<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\Comment;
use App\Models\User;

class ThreadReplyNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $comment;
    protected $commenter;
    protected $parentComment;

    /**
     * Create a new notification instance.
     */
    public function __construct(Comment $comment, User $commenter, Comment $parentComment = null)
    {
        $this->comment = $comment;
        $this->commenter = $commenter;
        $this->parentComment = $parentComment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        $channels = ['database'];

        // Add email channel if user has it enabled
        if ($notifiable->hasNotificationEnabled('thread_reply', 'email')) {
            $channels[] = 'mail';
        }

        // Add broadcast channel for real-time notifications
        $channels[] = 'broadcast';

        return $channels;
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $thread = $this->comment->thread;
        $commenter = $this->commenter;
        $replyType = $this->parentComment ? 'replied to your comment' : 'replied to the thread';

        return (new MailMessage)
            ->subject("New Reply on: {$thread->title}")
            ->greeting("Hello {$notifiable->name}!")
            ->line("{$commenter->name} has {$replyType} in: {$thread->title}")
            ->line('Reply:')
            ->line("{$this->comment->content}")
            ->action('View Reply', route('threads.show', $thread->id))
            ->line('Thank you for using our forum community!')
            ->markdown('emails.notifications.thread-reply', [
                'comment' => $this->comment,
                'commenter' => $commenter,
                'thread' => $thread,
                'parent_comment' => $this->parentComment,
                'user' => $notifiable,
                'reply_type' => $replyType,
            ]);
    }

    /**
     * Get the database representation of the notification.
     */
    public function toDatabase(object $notifiable): array
    {
        $thread = $this->comment->thread;

        return [
            'type' => 'thread_reply',
            'title' => 'New Reply on Thread',
            'message' => "{$this->commenter->name} replied in: {$thread->title}",
            'comment_id' => $this->comment->id,
            'thread_id' => $thread->id,
            'thread_title' => $thread->title,
            'commenter_id' => $this->commenter->id,
            'commenter_name' => $this->commenter->name,
            'commenter_avatar' => $this->commenter->avatar,
            'comment_content' => str_limit(strip_tags($this->comment->content), 100),
            'parent_comment_id' => $this->parentComment?->id,
            'url' => route('threads.show', $thread->id),
        ];
    }

    /**
     * Get the broadcast representation of the notification.
     */
    public function toBroadcast(object $notifiable): array
    {
        $thread = $this->comment->thread;

        return [
            'id' => $this->id,
            'type' => 'thread_reply',
            'title' => 'New Reply on Thread',
            'message' => "{$this->commenter->name} replied in: {$thread->title}",
            'data' => [
                'comment_id' => $this->comment->id,
                'thread_id' => $thread->id,
                'thread_title' => $thread->title,
                'commenter_id' => $this->commenter->id,
                'commenter_name' => $this->commenter->name,
                'commenter_avatar' => $this->commenter->avatar,
                'comment_content' => str_limit(strip_tags($this->comment->content), 100),
                'parent_comment_id' => $this->parentComment?->id,
                'url' => route('threads.show', $thread->id),
                'created_at' => now()->toISOString(),
            ],
        ];
    }

    /**
     * Determine which queues should be used for each notification channel.
     */
    public function viaQueues(): array
    {
        return [
            'mail' => 'notifications-email',
            'database' => 'notifications-database',
            'broadcast' => 'notifications-broadcast',
        ];
    }
}