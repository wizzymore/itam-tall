<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // User Routes
    Route::get('/notifications', [\App\Http\Controllers\UserNotificationsController::class, 'index'])
        ->name('notifications');

    // Employees Routes
    Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'index'])
        ->name('employees');
});
