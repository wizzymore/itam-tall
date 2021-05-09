<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dev Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dev routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| These are only loaded in local environment.
|
*/


Route::prefix('mails')->group(function (): void {
    Route::get('ResetPassword', function () {
        $notification = new \Illuminate\Auth\Notifications\ResetPassword('test');
        return $notification->toMail(auth()->user());
    });
});
