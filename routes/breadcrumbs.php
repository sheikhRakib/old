<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Permission;

// Dashboard
Breadcrumbs::for('portal', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('portal.index'));
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

// Dashboard > Invite > Create
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


