<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganKaryawanController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::with('karyawan')->get();
    return view('pelanggan_karyawan', compact('pelanggan'));
    }
}
