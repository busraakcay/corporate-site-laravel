<?php

use App\Http\Controllers\AdminPanel\AuthController;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\NewsController;
use App\Http\Controllers\AdminPanel\ProfileController;
use App\Http\Controllers\AdminPanel\SettingsController;
use App\Http\Controllers\CropImageController;
use App\Http\Controllers\ErrorHandlingController;
use App\Http\Controllers\UserPanel\HomeController;
use Illuminate\Support\Facades\Route;


Route::post('/cropImage', [CropImageController::class, 'cropImage'])->name('cropImage');
Route::get('/db-exception', [ErrorHandlingController::class, 'dbException'])->name('dbException');

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
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
    Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('updateProfile');
    Route::put('/update-password/{id}', [ProfileController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/update-settings', [SettingsController::class, 'update'])->name('updateSettings');

    Route::get('/news', [NewsController::class, 'index'])->name('news');

    Route::get('/create-news', [NewsController::class, 'create'])->name('createNews');
    Route::post('/store-news', [NewsController::class, 'store'])->name('storeNews');

    Route::get('/edit-news/{id}', [NewsController::class, 'edit'])->name('editNews');
    Route::put('/update-news/{id}', [NewsController::class, 'update'])->name('updateNews');
    Route::delete('/destroy-news/{id}', [NewsController::class, 'destroy'])->name('destroyNews');
    Route::get('/change-news-status', [NewsController::class, 'changeStatus'])->name('changeNewsStatus');
    Route::get('/change-news-place', [NewsController::class, 'changePlace'])->name('changeNewsPlace');
});
