<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Building;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// Dashboard
Breadcrumbs::for('portal', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('portal.index'));
});



// Dashboard > Personal Information
Breadcrumbs::for('portal.profile', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Profile', route('portal.userprofile'));
});



// Dashboard > Employee
Breadcrumbs::for('portal.employee', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Employee', route('portal.employee.index'));
});



// Dashboard > Invitation
Breadcrumbs::for('portal.invitation', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Invitee', route('portal.invitation.index'));
});
// Dashboard > Invitation > Create
Breadcrumbs::for('portal.invitation.create', function (BreadcrumbTrail $trail) {
    $trail->parent('portal.invitation');
    $trail->push('Invite', route('portal.invitation.create'));
});



// Dashboard > Permissions
Breadcrumbs::for('portal.permission', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Permissions', route('portal.permission.index'));
});
// Dashboard > Permissions > [Permission]
Breadcrumbs::for('portal.permission.edit', function (BreadcrumbTrail $trail, Permission $permission) {
    $trail->parent('portal.permission');
    $trail->push($permission->name, route('portal.permission.edit', $permission));
});



// Dashboard > Roles
Breadcrumbs::for('portal.role', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Roles', route('portal.role.index'));
});
// Dashboard > Roles > Create
Breadcrumbs::for('portal.role.create', function (BreadcrumbTrail $trail) {
    $trail->parent('portal.role');
    $trail->push('Create', route('portal.role.create'));
});
// Dashboard > Roles > [Role]
Breadcrumbs::for('portal.role.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('portal.role');
    $trail->push($role->name, route('portal.role.show', $role));
});
// Dashboard > Roles > [Role] > Edit
Breadcrumbs::for('portal.role.edit', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('portal.role.show', $role);
    $trail->push('Edit', route('portal.role.edit', $role));
});



// Dashboard > Buildings
Breadcrumbs::for('portal.building', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Buildings', route('portal.building.index'));
});
// Dashboard > Buildings > Create
Breadcrumbs::for('portal.building.create', function (BreadcrumbTrail $trail) {
    $trail->parent('portal.building');
    $trail->push('Create', route('portal.building.create'));
});
// Dashboard > Buildings > [Building]
Breadcrumbs::for('portal.building.show', function (BreadcrumbTrail $trail, Building $building) {
    $trail->parent('portal.role');
    $trail->push($building->name, route('portal.building.show', $building));
});
// Dashboard > Buildings > [Building] > Edit
Breadcrumbs::for('portal.building.edit', function (BreadcrumbTrail $trail, Building $building) {
    $trail->parent('portal.building.show', $building);
    $trail->push('Edit', route('portal.building.edit', $building));
});

