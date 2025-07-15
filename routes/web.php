<?php

use Illuminate\Support\Facades\Route;

// Welcome and Authentication
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('auth.login');
    
    Route::get('/admin/login', function () {
        return view('auth.admin-login');
    })->name('auth.admin.login');
    
    Route::get('/user/login', function () {
        return view('auth.user-login');
    })->name('auth.user.login');
    Route::get('/auth/user/signup', function () {
        return view('auth.user-signup');
    })->name('auth.user.signup');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/products', function () {
        return view('admin.products');
    })->name('admin.products');
    
    Route::get('/products/add', function () {
        return view('admin.product-form');
    })->name('admin.products.add');
    
    // Alternative route if you want to use /products-form
    Route::get('/products-form', function () {
        return view('admin.product-form');
    })->name('admin.products.form');
    
    Route::get('/transactions', function () {
        return view('admin.transactions');
    })->name('admin.transactions');
    
    Route::get('/invoices', function () {
        return view('admin.invoices');
    })->name('admin.invoices');
});

// User Routes
Route::prefix('user')->group(function () {
    Route::get('/home', function () {
        return view('user.home');
    })->name('user.home');
    
    Route::get('/products', function () {
        return view('user.products');
    })->name('user.products');
    
    Route::get('/products/{id}', function () {
        return view('user.product-detail');
    })->name('user.products.detail');
    
    Route::get('/cart', function () {
        return view('user.cart');
    })->name('user.cart');
    
    Route::get('/checkout', function () {
        return view('user.checkout');
    })->name('user.checkout');
    
    Route::get('/orders', function () {
        return view('user.orders');
    })->name('user.orders');
    
    Route::get('/orders/{id}', function () {
        return view('user.invoice');
    })->name('user.orders.invoice');

    Route::get('/user/special-offers', function () {
        return view('user.special-offers');
    })->name('user.special-offers');
});