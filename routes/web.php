<?php

use App\Http\Controllers\AdminPanel\AuthController;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\UserPanel\HomeController;
use Illuminate\Support\Facades\Route;

/** User Panel */

Route::group([
    'prefix' => 'tr', // local lang prefix
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});


Route::get('/', function () {
    return redirect(app()->getLocale());
});


/** Admin Panel */

Route::prefix('cp')->name('admin.')->group(function () {
    Route::get('/giris-yap', [AuthController::class, 'loginPage'])->name('loginPage')->middleware('authManager');
    Route::post('/manage-login', [AuthController::class, 'login'])->name('login')->middleware('authManager');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('cp')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
