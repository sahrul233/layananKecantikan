<?php

use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardKaryawanController;
use App\Http\Controllers\DashboardPelangganController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Reservasi;

// Dashboard
Route::get('/dashboard_owner', [DashboardOwnerController::class, 'index'])->name('dashboard_owner');
Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/dashboard_karyawan', [DashboardKaryawanController::class, 'index'])->name('dashboard_karyawan');
Route::get('/dashboard_pelanggan', [DashboardPelangganController::class, 'index'])->name('dashboard_pelanggan');

Route::get('/register_admin', [RegisterController::class, 'index'])->name('register.form');
Route::post('/register_admin', [RegisterController::class, 'store']);

Route::get('/login_admin', [LoginController::class, 'index'])->name('login');
Route::post('/login_admin', [LoginController::class, 'login_proses']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




// Reservasi (butuh login)
Route::get('/reservasi', [Reservasi::class, 'index'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
