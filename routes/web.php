<?php

use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication routes
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
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/products', function () {
        return view('admin.products');
    })->name('admin.products');
    
    Route::get('/transactions', function () {
        return view('admin.transactions');
    })->name('admin.transactions');
    
    Route::get('/invoices', function () {
        return view('admin.invoices');
    })->name('admin.invoices');
});

// User routes
Route::prefix('user')->group(function () {
    Route::get('/home', function () {
        return view('user.home');
    })->name('user.home');
    
    Route::get('/products', function () {
        return view('user.products');
    })->name('user.products');
    
    Route::get('/cart', function () {
        return view('user.cart');
    })->name('user.cart');
    
    Route::get('/checkout', function () {
        return view('user.checkout');
    })->name('user.checkout');
});