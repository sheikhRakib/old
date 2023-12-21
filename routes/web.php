<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PortalController;
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

Route::get('home', function() {
    return view('welcome');
})->name('home');

Route::group(['prefix'=>'portal', 'as'=>'portal.'], function () {
    Route::get('/', [PortalController::class, 'index'])->name('index');
    Route::get('inventory', [PortalController::class, 'inventory'])->name('inventory');

    Route::group(['prefix' => 'employee', 'as'=>'employee.'], function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
        Route::get('invite', [EmployeeController::class, 'invite'])->name('invite');

    });
});
