<?php

namespace App\Policies;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ThreadPolicy
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
    public function view(User $user, Thread $thread): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create-threads');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Thread $thread): bool
    {
        // User can edit their own thread
        if ($user->id === $thread->user_id) {
            return $user->can('edit-own-threads');
        }

        // Moderators and admins can edit any thread
        return $user->can('edit-any-threads') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Thread $thread): bool
    {
        // User can delete their own thread
        if ($user->id === $thread->user_id) {
            return $user->can('delete-own-threads');
        }

        // Moderators and admins can delete any thread
        return $user->can('delete-any-threads') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Thread $thread): bool
    {
        return $user->can('delete-any-threads') || $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Thread $thread): bool
    {
        return $user->can('delete-any-threads') || $user->isAdmin();
    }

    /**
     * Determine whether the user can pin the thread.
     */
    public function pin(User $user, Thread $thread): bool
    {
        return $user->can('pin-threads') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can lock the thread.
     */
    public function lock(User $user, Thread $thread): bool
    {
        return $user->can('lock-threads') || $user->canModerateForum();
    }

    /**
     * Determine whether the user can reply to the thread.
     */
    public function reply(User $user, Thread $thread): bool
    {
        if ($thread->is_locked) {
            return $user->canModerateForum();
        }

        return $user->can('create-comments');
    }
}