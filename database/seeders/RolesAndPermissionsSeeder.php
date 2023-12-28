<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'p.*',

            'p.member.*',
            'p.member.invite',
            'p.member.view',
            'p.member.edit',
            'p.member.delete',
        ];

        foreach($permissions as $permission) Permission::create(['name' => $permission]);

        $admin  = Role::create(['name' => 'super-admin']);
        $user   = Role::create(['name' => 'user']);

        $admin_permissions = [
            'p.*',
        ];
        $user_permissions = [
            'p.member.view',
        ];

        $user->syncPermissions($user_permissions);
        $admin->syncPermissions($admin_permissions);
    }
}
