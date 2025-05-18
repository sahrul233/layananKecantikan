<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

use App\Http\Controllers\Reservasi;

Route::get('/register_admin', [RegisterController::class, 'index'])->name('register.form');
Route::post('/register_admin', [RegisterController::class, 'store']);

Route::get('/login_admin', [LoginController::class, 'index'])->name('login');
Route::post('/login_admin', [LoginController::class, 'login_proses']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (butuh login)
Route::get('/admin_dashboard', [Dashboard::class, 'index'])->name('admin_dashboard');

// Reservasi (butuh login)
Route::get('/reservasi', [Reservasi::class, 'index'])->middleware('auth');

