<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('jobSearch', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Job Search', route('job.search'));
});

// Home > Job Search > Call Details
Breadcrumbs::for('callDetails', function (BreadcrumbTrail $trail) {
    $trail->parent('jobSearch');
    $trail->push('Call Details', route('call.details',['edit','false']));
});

// Home > Dashboard
Breadcrumbs::for('newJobInquiries', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('New Job Inquiries', route('new.job.inquiries'));
});

// Home > New Job Inquiries > Call Details
Breadcrumbs::for('newJobCallDetails', function (BreadcrumbTrail $trail) {
    $trail->parent('newJobInquiries');
    $trail->push('Call Details', route('call.details',['edit','false']));
});

// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management > Permission
Breadcrumbs::for('user-management.permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Permissions', route('user-management.permissions.index'));
});
