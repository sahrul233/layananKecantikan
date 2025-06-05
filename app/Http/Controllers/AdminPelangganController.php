<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::with('karyawan')->get();
    return view('pelanggan_admin', compact('pelanggan'));
    }
}
