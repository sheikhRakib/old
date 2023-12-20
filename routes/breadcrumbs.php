<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Dashboard
Breadcrumbs::for('portal.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('portal.index'));
});

// // Home > Blog
// Breadcrumbs::for('portal.inventory', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Index', route('portal.inventory'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });
