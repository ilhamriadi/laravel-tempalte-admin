<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\Comment;
use App\Models\User;

class NewCommentNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $comment;
    protected $commenter;

    /**
     * Create a new notification instance.
     */
    public function __construct(Comment $comment, User $commenter)
    {
        $this->comment = $comment;
        $this->commenter = $commenter;
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
        if ($notifiable->hasNotificationEnabled('new_comment', 'email')) {
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

        return (new MailMessage)
            ->subject("New Comment on: {$thread->title}")
            ->greeting("Hello {$notifiable->name}!")
            ->line("{$commenter->name} has commented on your thread: {$thread->title}")
            ->line('Comment:')
            ->line("{$this->comment->content}")
            ->action('View Comment', route('threads.show', $thread->id))
            ->line('Thank you for using our forum community!')
            ->markdown('emails.notifications.new-comment', [
                'comment' => $this->comment,
                'commenter' => $commenter,
                'thread' => $thread,
                'user' => $notifiable,
            ]);
    }

    /**
     * Get the database representation of the notification.
     */
    public function toDatabase(object $notifiable): array
    {
        $thread = $this->comment->thread;

        return [
            'type' => 'new_comment',
            'title' => 'New Comment on Your Thread',
            'message' => "{$this->commenter->name} commented on: {$thread->title}",
            'comment_id' => $this->comment->id,
            'thread_id' => $thread->id,
            'thread_title' => $thread->title,
            'commenter_id' => $this->commenter->id,
            'commenter_name' => $this->commenter->name,
            'commenter_avatar' => $this->commenter->avatar,
            'comment_content' => str_limit(strip_tags($this->comment->content), 100),
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
            'type' => 'new_comment',
            'title' => 'New Comment on Your Thread',
            'message' => "{$this->commenter->name} commented on: {$thread->title}",
            'data' => [
                'comment_id' => $this->comment->id,
                'thread_id' => $thread->id,
                'thread_title' => $thread->title,
                'commenter_id' => $this->commenter->id,
                'commenter_name' => $this->commenter->name,
                'commenter_avatar' => $this->commenter->avatar,
                'comment_content' => str_limit(strip_tags($this->comment->content), 100),
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