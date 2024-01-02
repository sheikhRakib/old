<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Dashboard
Breadcrumbs::for('portal', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('portal.index'));
});

// Dashboard > Employee
Breadcrumbs::for('portal.employee', function (BreadcrumbTrail $trail) {
    $trail->parent('portal');
    $trail->push('Employee', route('portal.employee.index'));
});

Breadcrumbs::for('portal.employee.invite.list', function (BreadcrumbTrail $trail) {
    $trail->parent('portal.employee');
    $trail->push('Invitee List', route('portal.employee.invite.list'));
});

// Dashboard > Employee > Invite > View
Breadcrumbs::for('portal.employee.invite', function (BreadcrumbTrail $trail) {
    $trail->parent('portal.employee');
    $trail->push('Invite', route('portal.employee.invite.view'));
});



// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
