<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Thread;
use App\Models\Comment;
use App\Models\Group;
use App\Models\User;
use App\Policies\ThreadPolicy;
use App\Policies\CommentPolicy;
use App\Policies\GroupPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Thread::class => ThreadPolicy::class,
        Comment::class => CommentPolicy::class,
        Group::class => GroupPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related checks like auth()->user()->can()
        Gate::before(function (User $user, string $ability) {
            if ($user->hasRole('admin')) {
                return true;
            }
        });

        // Define custom gates for specific forum operations
        Gate::define('moderate-forum', function (User $user) {
            return $user->hasRole(['admin', 'moderator']);
        });

        Gate::define('manage-system', function (User $user) {
            return $user->hasRole('admin');
        });

        Gate::define('view-statistics', function (User $user) {
            return $user->hasRole(['admin', 'moderator']);
        });

        Gate::define('manage-users', function (User $user) {
            return $user->hasRole('admin');
        });

        Gate::define('ban-users', function (User $user) {
            return $user->hasRole('admin');
        });
    }
}