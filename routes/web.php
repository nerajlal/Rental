<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main site routes
Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/single-product', function () {
    return view('single-product');
});


// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/products', function () {
        return view('admin.products');
    });

    Route::get('/orders', function () {
        return view('admin.orders');
    });

    Route::get('/customers', function () {
        return view('admin.customers');
    });

    Route::get('/settings', function () {
        return view('admin.settings');
    });
});
