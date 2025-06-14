<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Photograoher\PhotographerAuthController;
use App\Http\Controllers\Photograoher\RegisteredPhotographerController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    //admin-login
    Route::prefix('admin')->controller(AdminAuthController::class)->group(function () {
        Route::get('login', 'create')->name('admin.login.create');
        Route::post('login', 'store')->name('admin.login.store');
    });

});


/* Admin Logout */
Route::middleware('auth:admins')->post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
