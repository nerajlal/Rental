<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main site routes
Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/single-product', [PageController::class, 'singleProduct']);

// Admin Auth routes
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');


// Protected Admin routes
Route::middleware(['auth.admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/products', [AdminController::class, 'products']);
    Route::get('/orders', [AdminController::class, 'orders']);
    Route::get('/customers', [AdminController::class, 'customers']);
    Route::get('/settings', [AdminController::class, 'settings']);
});
