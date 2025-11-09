<?php

namespace App\Policies;

use App\Models\Group;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GroupPolicy
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
    public function view(User $user, Group $group): bool
    {
        return $group->canBeViewedBy($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create-groups');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Group $group): bool
    {
        // User can manage their own groups
        if ($user->canManageGroup($group)) {
            return $user->can('manage-own-groups');
        }

        // Admins can manage any group
        return $user->can('manage-any-groups') || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Group $group): bool
    {
        // Only group owners can delete their groups
        if ($group->isOwner($user)) {
            return $user->can('manage-own-groups');
        }

        // Admins can delete any group
        return $user->can('manage-any-groups') || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Group $group): bool
    {
        return $user->can('manage-any-groups') || $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Group $group): bool
    {
        return $user->can('manage-any-groups') || $user->isAdmin();
    }

    /**
     * Determine whether the user can join the group.
     */
    public function join(User $user, Group $group): bool
    {
        return $group->canBeJoinedBy($user) && $user->can('join-groups');
    }

    /**
     * Determine whether the user can leave the group.
     */
    public function leave(User $user, Group $group): bool
    {
        // Cannot leave if you're the owner
        if ($group->isOwner($user)) {
            return false;
        }

        return $group->hasMember($user);
    }

    /**
     * Determine whether the user can manage members.
     */
    public function manageMembers(User $user, Group $group): bool
    {
        return $group->isAdmin($user) || $user->can('manage-any-groups');
    }

    /**
     * Determine whether the user can invite others to the group.
     */
    public function invite(User $user, Group $group): bool
    {
        return $group->isAdmin($user) && $user->can('invite-to-groups');
    }

    /**
     * Determine whether the user can kick members from the group.
     */
    public function kick(User $user, Group $group, User $targetUser): bool
    {
        // Cannot kick yourself
        if ($user->id === $targetUser->id) {
            return false;
        }

        // Can kick if you're an admin and target is not an admin/owner
        if ($group->isAdmin($user) && !$group->isAdmin($targetUser)) {
            return true;
        }

        // Group owners can kick anyone except themselves
        return $group->isOwner($user) && !$group->isOwner($targetUser);
    }

    /**
     * Determine whether the user can change member roles.
     */
    public function changeRole(User $user, Group $group, User $targetUser): bool
    {
        // Cannot change your own role
        if ($user->id === $targetUser->id) {
            return false;
        }

        $userRole = $group->getMemberRole($user);
        $targetRole = $group->getMemberRole($targetUser);

        // Owners can change any role except other owners
        if ($userRole === 'owner' && $targetRole !== 'owner') {
            return true;
        }

        // Admins can change roles of members and moderators, but not other admins/owners
        if ($userRole === 'admin' && in_array($targetRole, ['member', 'moderator'])) {
            return true;
        }

        return false;
    }
}