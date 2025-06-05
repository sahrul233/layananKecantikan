<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganOwnerController extends Controller
{
    public function index()
    {
    $pelanggan = Pelanggan::with('karyawan')->get();
    return view('pelanggan_owner', compact('pelanggan'));
    }
}
