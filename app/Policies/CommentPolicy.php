<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Comment $comment): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create-comments');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Comment $comment): bool
    {
        // User can edit their own comment within 15 minutes
        if ($user->id === $comment->user_id) {
            if ($comment->created_at->diffInMinutes(now()) < 15) {
                return $user->can('edit-own-comments');
            }
            return false;
        }

        // Moderators and admins can edit any comment
        return $user->can('edit-any-comments') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Comment $comment): bool
    {
        // User can delete their own comment
        if ($user->id === $comment->user_id) {
            return $user->can('delete-own-comments');
        }

        // Moderators and admins can delete any comment
        return $user->can('delete-any-comments') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Comment $comment): bool
    {
        return $user->can('delete-any-comments') || $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Comment $comment): bool
    {
        return $user->can('delete-any-comments') || $user->isAdmin();
    }

    /**
     * Determine whether the user can reply to the comment.
     */
    public function reply(User $user, Comment $comment): bool
    {
        if ($comment->thread->is_locked) {
            return $user->canModerateForum();
        }

        return $user->can('create-comments');
    }

    /**
     * Determine whether the user can like the comment.
     */
    public function like(User $user, Comment $comment): bool
    {
        // Users cannot like their own comments
        if ($user->id === $comment->user_id) {
            return false;
        }

        return true;
    }

    /**
     * Determine whether the user can vote on the comment.
     */
    public function vote(User $user, Comment $comment): bool
    {
        // Users cannot vote on their own comments
        if ($user->id === $comment->user_id) {
            return false;
        }

        return true;
    }
}