<?php

use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardKaryawanController;
use App\Http\Controllers\DashboardPelangganController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\JadwalPelangganController;
use App\Http\Controllers\JadwalAdminController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\DataPelangganController;
use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\RatingUlasanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/data_karyawan', [DataKaryawanController::class, 'index'])->name('data_karyawan.index');
Route::get('/data_karyawan/tambah', [DataKaryawanController::class, 'tambah'])->name('data_karyawan.tambah');
Route::post('/data_karyawan/tambah', [DataKaryawanController::class, 'action_tambah'])->name('data_karyawan.store');

Route::get('/data_karyawan/{id}/edit', [DataKaryawanController::class, 'edit'])->name('data_karyawan.edit');
Route::post('/data_karyawan/{id}/edit', [DataKaryawanController::class, 'action_edit'])->name('data_karyawan.update');

Route::get('/data_pelanggan', [DataPelangganController::class, 'index'])->name('data_pelanggan.index');
Route::get('/data_pelanggan/tambah', [DataPelangganController::class, 'tambah'])->name('data_pelanggan.tambah');
Route::post('/data_pelanggan/tambah', [DataPelangganController::class, 'action_tambah'])->name('data_pelanggan.store');

Route::get('/data_pelanggan/{id}/edit', [DataPelangganController::class, 'edit'])->name('data_pelanggan.edit');
Route::post('/data_pelanggan/{id}/edit', [DataPelangganController::class, 'action_edit'])->name('data_pelanggan.update');

Route::get('/data_produk', [DataProdukController::class, 'index'])->name('data_produk.index');
Route::get('/data_produk/tambah', [DataProdukController::class, 'tambah'])->name('data_produk.tambah');
Route::post('/data_produk/tambah', [DataProdukController::class, 'action_tambah'])->name('data_produk.store');

Route::get('/data_produk/{id}/edit', [DataProdukController::class, 'edit'])->name('data_produk.edit');
Route::post('/data_produk/{id}/edit', [DataProdukController::class, 'action_edit'])->name('data_produk.update');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');

Route::get('/jadwal_pelanggan', [JadwalPelangganController::class, 'index'])->name('jadwal_pelanggan.index');
Route::get('/jadwal_admin', [JadwalAdminController::class, 'index'])->name('jadwal_admin.index');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/tambah', [UsersController::class, 'tambah'])->name('users.tambah');
Route::post('/users/tambah', [UsersController::class, 'action_tambah'])->name('users.store');

Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/users/{id}/edit', [UsersController::class, 'action_edit'])->name('users.update');

Route::get('/rating_ulasan', [RatingUlasanController::class, 'index'])->name('rating_ulasan.index');
Route::get('/rating_ulasan/tambah', [RatingUlasanController::class, 'tambah'])->name('rating_ulasan.tambah');
Route::post('/rating_ulasan/tambah', [RatingUlasanController::class, 'action_tambah'])->name('rating_ulasan.store');

Route::get('/rating_ulasan/{id}/edit', [RatingUlasanController::class, 'edit'])->name('rating_ulasan.edit');
Route::post('/rating_ulasan/{id}/edit', [RatingUlasanController::class, 'action_edit'])->name('rating_ulasan.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
