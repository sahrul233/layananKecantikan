<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

route::get('/admin_dashboard', [Dashboard::class, 'index']);
Route::get('/reservasi', [Reservasi::class, 'index']);
