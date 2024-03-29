<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('index');
Route::redirect('home', 'portal')->name('home');

// Portal
Route::group(['prefix' => 'portal', 'as' => 'portal.', 'middleware' => ['auth', 'isActive']], function () {
    Route::get('/', [PortalController::class, 'index'])->name('index');

    Route::get('profile', [PortalController::class, 'userprofile'])->name('userprofile');

    // Portal>Employee
    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });

    // Portal > Invite
    Route::resource('invitation', InvitationController::class)->only(['index', 'create', 'store', 'destroy']);

    // Portal > Permissions
    Route::resource('permission', PermissionController::class)->only(['index', 'edit', 'update']);

    // Portal > Roles
    Route::resource('role', RoleController::class);

    // Portal > Buildings
    Route::resource('building', BuildingController::class);
});
