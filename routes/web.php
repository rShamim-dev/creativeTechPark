<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Admin\SiteSettingsController;
use App\Http\Controllers\Admin\SocialSettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

// Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
// });
