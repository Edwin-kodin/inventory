<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('layouts.login');
});


Route::get('/dashboard', function () {
    return view('layouts.dashboard'); // your normal dashboard.blade.php
})->name('dashboard');

// Admin login page
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle admin login form submission
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin dashboard
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/inventory', function () {
    return view('layouts.inventory');
});

Route::get('/reports', function () {
    return view('layouts.reports');
});

Route::get('/settings', function () {
    return view('layouts.settings');
});
