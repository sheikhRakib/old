<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\RoleAndPermissionController;
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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::redirect('home', 'portal')->name('home');

// Portal
Route::group(['prefix' => 'portal', 'as' => 'portal.', 'middleware' => 'auth'], function () {
    Route::get('/', [PortalController::class, 'index'])->name('index');
    Route::get('inventory', [PortalController::class, 'inventory'])->name('inventory');

    // Portal>Employee
    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');

        // Portal>Employee>Invite
        Route::group(['prefix' => 'invite', 'as' => 'invite.'], function () {
            Route::get('/', [EmployeeController::class, 'invite'])->name('view');
            Route::post('/', [EmployeeController::class, 'sendInvitation'])->name('send');
            Route::get('list', [EmployeeController::class, 'list'])->name('list');
        });
    });

    // Portal > Roles&Permissions
    Route::group(['prefix' => 'permissions', 'as' => 'permissions.'], function () {
        Route::get('/', [PermissionController::class, 'index'])->name('index');
        Route::get('{permission}', [PermissionController::class, 'edit'])->name('edit');
        Route::put('{permission}', [PermissionController::class, 'update'])->name('update');
    });
});
