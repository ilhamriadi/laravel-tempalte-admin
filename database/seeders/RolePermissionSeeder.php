<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Create permissions
            $permissions = [
                // Forum permissions
                'create-threads',
                'edit-own-threads',
                'delete-own-threads',
                'edit-any-threads',
                'delete-any-threads',
                'pin-threads',
                'lock-threads',

                // Comment permissions
                'create-comments',
                'edit-own-comments',
                'delete-own-comments',
                'edit-any-comments',
                'delete-any-comments',

                // Group permissions
                'create-groups',
                'manage-own-groups',
                'manage-any-groups',
                'join-groups',
                'invite-to-groups',

                // User management
                'manage-users',
                'ban-users',
                'view-statistics',
                'manage-system',
            ];

            foreach ($permissions as $permission) {
                Permission::firstOrCreate(['name' => $permission]);
            }

            // Create roles and assign permissions
            $adminRole = Role::firstOrCreate(['name' => 'admin']);
            $adminRole->givePermissionTo(Permission::all());

            $moderatorRole = Role::firstOrCreate(['name' => 'moderator']);
            $moderatorRole->givePermissionTo([
                'edit-any-threads',
                'delete-any-threads',
                'pin-threads',
                'lock-threads',
                'edit-any-comments',
                'delete-any-comments',
                'manage-any-groups',
                'join-groups',
                'view-statistics',
            ]);

            $userRole = Role::firstOrCreate(['name' => 'user']);
            $userRole->givePermissionTo([
                'create-threads',
                'edit-own-threads',
                'delete-own-threads',
                'create-comments',
                'edit-own-comments',
                'delete-own-comments',
                'create-groups',
                'manage-own-groups',
                'join-groups',
            ]);
        });
    }
}