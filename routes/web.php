<?php

use App\Http\Controllers\AdminPanel\AuthController;
use App\Http\Controllers\AdminPanel\BannerController;
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\NewsController;
use App\Http\Controllers\AdminPanel\ProductController;
use App\Http\Controllers\AdminPanel\ProfileController;
use App\Http\Controllers\AdminPanel\SettingsController;
use App\Http\Controllers\CropImageController;
use App\Http\Controllers\ErrorHandlingController;
use App\Http\Controllers\UserPanel\HomeController;
use Illuminate\Support\Facades\Route;


Route::post('/cropImage', [CropImageController::class, 'cropImage'])->name('cropImage');
Route::post('/cropImageDestroy', [CropImageController::class, 'cropImageDestroy'])->name('cropImageDestroy');
Route::get('/getProductImagesToDropzone', [CropImageController::class, 'getProductImagesToDropzone'])->name('getProductImagesToDropzone');
Route::get('/getProductImageId', [CropImageController::class, 'getProductImageId'])->name('getProductImageId');
Route::get('/db-exception', [ErrorHandlingController::class, 'dbException'])->name('dbException');

/** User Panel */



Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
], function () {

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/hakkimizda', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/iletisim', [HomeController::class, 'contactUs'])->name('contactUs');
    Route::get('/urunler', [HomeController::class, 'products'])->name('products');

    Route::get('/urun-detay', [HomeController::class, 'productDetail'])->name('productDetail');
});


Route::get('/', function () {
    return redirect(app()->getLocale());
});


/** Admin Panel */

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/giris-yap', [AuthController::class, 'loginPage'])->name('loginPage')->middleware('authManager');
    Route::post('/manage-login', [AuthController::class, 'login'])->name('login')->middleware('authManager');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
    Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('updateProfile');
    Route::put('/update-password/{id}', [ProfileController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/update-settings', [SettingsController::class, 'update'])->name('updateSettings');


    require_once 'adminRoutes/newsRoutes.php';
    require_once 'adminRoutes/bannersRoutes.php';
    require_once 'adminRoutes/productsRoutes.php';
});
