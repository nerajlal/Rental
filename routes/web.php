<?php

use App\Http\Controllers\Admin\AdminController;
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


// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/products', [AdminController::class, 'products']);
    Route::get('/orders', [AdminController::class, 'orders']);
    Route::get('/customers', [AdminController::class, 'customers']);
    Route::get('/settings', [AdminController::class, 'settings']);
});
