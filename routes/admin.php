<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('user',UserController::class);
});
