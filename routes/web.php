<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
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
Route::get('/products', [PageController::class, 'products'])->name('products.index');
Route::get('/products/{product}', [PageController::class, 'showProduct'])->name('products.show');
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist.index');
Route::post('/products-by-ids', [PageController::class, 'getProductsByIds'])->name('products.byIds');

// Public image route
Route::get('/product-image/{imageName}', [ProductController::class, 'getProductImage'])->name('product.image');

// Admin Auth routes
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');


// Protected Admin routes
Route::middleware(['auth.admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders.index');
    Route::get('/customers', [AdminController::class, 'customers'])->name('admin.customers.index');

    // Settings Routes
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings.index');
    Route::post('/settings/password', [AdminController::class, 'updatePassword'])->name('admin.settings.password.update');
});
