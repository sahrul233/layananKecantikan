<?php

use App\Http\Controllers\awalController;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardKaryawanController;
use App\Http\Controllers\DashboardPelangganController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\JadwalPelangganController;
use App\Http\Controllers\JadwalAdminController;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KaryawanController;

use App\Http\Controllers\RatingUlasanController;
use App\Http\Controllers\RatingPelangganController;

use App\Http\Controllers\KaryawanOwnerController;

use App\Http\Controllers\PelangganOwnerController;
use App\Http\Controllers\ProdukOwnerController;
use App\Http\Controllers\JadwalOwnerController;
use App\Http\Controllers\RatingOwnerController;
use App\Http\Controllers\PelangganKaryawanController;
use App\Http\Controllers\PembayaranPelangganController;
use App\Http\Controllers\PembayaranAdminController;
use App\Http\Controllers\RiwayatPembayaranPelangganController;
use App\Http\Controllers\PembayaranOwnerController;
use App\Http\Controllers\DataLayananController;
use App\Http\Controllers\PelangganlayananController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/awal', [awalController::class, 'index'])->name('awal');
Route::get('/dashboard_owner', [DashboardOwnerController::class, 'index'])->name('dashboard_owner');
Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/dashboard_karyawan', [DashboardKaryawanController::class, 'index'])->name('dashboard_karyawan');
Route::get('/dashboard_pelanggan', [DashboardPelangganController::class, 'index'])->name('dashboard_pelanggan');

Route::get('/register_admin', [RegisterController::class, 'index'])->name('register.form');
Route::post('/register_admin', [RegisterController::class, 'store']);

// Route::get('/login_admin', [LoginAdminController::class, 'index'])->name('login_admin');
// Route::post('/login_admin', [LoginAdminController::class, 'login_proses'])->name('login.process');
// Route::post('/logout_admin', [LoginAdminController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard_pelanggan', function () {
        return view('dashboard_pelanggan');
    });
});

Route::get('/karyawan/data_karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/tambah', [KaryawanController::class, 'simpan']); // ← Tambahkan ini
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update/{id}', [KaryawanController::class, 'update']);
Route::delete('/karyawan/hapus/{id}', [KaryawanController::class, 'destroy']);

Route::get('/layanan_admin/data_layanan', [DataLayananController::class, 'index']);
Route::get('/layanan_admin/tambah', [DataLayananController::class, 'tambah']);
Route::post('/layanan_admin/tambah', [DataLayananController::class, 'simpan']); // ← Tambahkan ini
Route::get('/layanan_admin/edit/{id}', [DataLayananController::class, 'edit']);
Route::post('/layanan_admin/update/{id}', [DataLayananController::class, 'update']);
Route::get('/layanan_admin/hapus/{id}', [DataLayananController::class, 'hapus']);


//Route::get('/layanan_pelanggan', [PelangganlayananController::class, 'index']);
// Menampilkan layanan
Route::get('/pelanggan_layanan', [PelangganlayananController::class, 'index'])->name('pelanggan.layanan');
Route::post('/pelanggan_layanan/pesan/{id}', [PelangganlayananController::class, 'pesanLayanan'])->name('pelanggan.pesan');
Route::get('/pelanggan_layanan/riwayat', [PelangganlayananController::class, 'riwayat'])->name('pelanggan.riwayat');





Route::get('/pelanggan/data_pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [PelangganController::class, 'tambah']);
Route::post('/pelanggan/tambah', [PelangganController::class, 'simpan']); // ← Tambahkan ini
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/hapus/{id}', [PelangganController::class, 'destroy']);

Route::get('/pelanggan/layanan', [LayananController::class, 'tampilkanLayanan']);


Route::get('/layanan_pelanggan', [LayananController::class, 'index'])->name('layanan_pelanggan.index');

Route::get('/jadwal_pelanggan', [JadwalPelangganController::class, 'index'])->name('jadwal_pelanggan.index');

Route::get('/pembayaran_pelanggan', [PembayaranPelangganController::class, 'index'])->name('pembayaran_pelanggan.index');

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

Route::get('/rating_pelanggan', [RatingPelangganController::class, 'index'])->name('rating_pelanggan.index');
Route::get('/rating_pelanggan/tambah', [RatingPelangganController::class, 'tambah'])->name('rating_pelanggan.tambah');
Route::post('/rating_pelanggan/tambah', [RatingPelangganController::class, 'action_tambah'])->name('rating_pelanggan.store');

Route::get('/rating_pelanggan/{id}/edit', [RatingPelangganController::class, 'edit'])->name('rating_pelanggan.edit');
Route::post('/rating_pelanggan/{id}/edit', [RatingPelangganController::class, 'action_edit'])->name('rating_pelanggan.update');
Route::get('/rating_pelanggan/{id}/hapus', [RatingPelangganController::class, 'hapus'])->name('rating_pelanggan.destroy');


Route::get('/karyawan_owner', [KaryawanOwnerController::class, 'index'])->name('karyawan_owner.index');
Route::get('/pelanggan_owner', [PelangganOwnerController::class, 'index'])->name('pelanggan_owner.index');
Route::get('/produk_owner', [ProdukOwnerController::class, 'index'])->name('produk_owner.index');
Route::get('/jadwal_owner', [JadwalOwnerController::class, 'index'])->name('jadwal_owner.index');
Route::get('/rating_owner', [RatingOwnerController::class, 'index'])->name('rating_owner.index');

Route::get('/pelanggan_karyawan', [PelangganKaryawanController::class, 'index'])->name('pelanggan_karyawan.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pembayaran_pelanggan', [PembayaranPelangganController::class, 'index'])->name('pembayaran_pelanggan.index');
Route::post('/pembayaran_pelanggan', [PembayaranPelangganController::class, 'processPayment'])->name('pembayaran_pelanggan.process');

Route::get('/pembayaran_admin', [PembayaranAdminController::class, 'index'])->name('pembayaran_admin.index');
Route::get('/pembayaran_admin/{id}/detail', [PembayaranAdminController::class, 'show'])->name('pembayaran_admin.detail');
Route::post('/pembayaran_admin/{id}/status', [PembayaranAdminController::class, 'updateStatus'])->name('admin.pembayaran.updateStatus');

Route::get('/riwayatpembayaran_pelanggan', [RiwayatPembayaranPelangganController::class, 'index'])->name('riwayatpembayaran_pelanggan.index');
Route::get('/riwayatpembayaran/{id}/detail', [RiwayatPembayaranPelangganController::class, 'show'])->name('riwayatpembayaran_pelanggan.detail');

Route::get('/pembayaran_owner', [PembayaranOwnerController::class, 'index'])->name('pembayaran_owner.index');
Route::get('/pembayaran_owner/{id}/detail', [PembayaranOwnerController::class, 'show'])->name('pembayaran_owner.detail');
