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
            ['name' => 'p.*', 'displayname' => 'Permission: Root'],
            // Employee Permissions
            ['name' => 'p.employee.*', 'displayname' => 'Permission: Employee Access'],
            ['name' => 'p.employee.create', 'displayname' => 'Permission: Create Employee'],
            ['name' => 'p.employee.read', 'displayname' => 'Permission: Read Employee'],
            ['name' => 'p.employee.update', 'displayname' => 'Permission: Update Employee'],
            ['name' => 'p.employee.delete', 'displayname' => 'Permission: Delete Employee'],
        ];

        foreach($permissions as $permission) Permission::create(['name' => $permission['name'], 'displayname' => $permission['displayname']]);

        $system  = Role::create(['name' => 'system', 'displayname' => 'System']);
        $member   = Role::create(['name' => 'member', 'displayname' => 'Member']);

        // $admin_permissions = [
        //     'p.*',
        // ];
        // $user_permissions = [
        //     'p.member.view',
        // ];

        // $user->syncPermissions($user_permissions);
        // $admin->syncPermissions($admin_permissions);
    }
}
