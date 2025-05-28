<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPembayaranPelangganModel;

class RiwayatPembayaranPelangganController extends Controller
{
    public function index()
    {
        return view('/riwayatpembayaran_pelanggan');
    }

    public function show($id)
    {
        $pembayaran = RiwayatPembayaranPelangganModel::with('layanan')->findOrFail($id);
        return view('riwayatpembayaran_pelanggan-detail', compact('pembayaran'));
    }
}
