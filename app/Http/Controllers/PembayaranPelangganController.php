<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranPelangganModel;
use App\Models\DataLayanan;

class PembayaranPelangganController extends Controller
{
    // Menampilkan daftar layanan
    public function listLayanan()
    {
        $layanans = DataLayanan::all();
        return view('layanan_pelanggan', compact('layanans'));
    }

    // Menampilkan halaman pembayaran berdasarkan ID layanan
    public function index($id)
    {
        $layanan = DataLayanan::find($id);

        if (!$layanan) {
            return redirect()->route('layanan.list')->with('error', 'Layanan tidak ditemukan.');
        }

        return view('pembayaran_pelanggan', compact('layanan'));
    }

    // Memproses pembayaran
    public function processPayment(Request $request)
    {
        $validatedData = $request->validate([
            'metode_pembayaran' => 'required|string',
            'catatan' => 'nullable|string',
            'total_harga' => 'required|numeric',
            'layanan_id' => 'required|exists:data_layanan,id',
        ]);

        PembayaranPelangganModel::create($validatedData);

        return redirect()->route('layanan.list')->with('success', 'Pembayaran berhasil diproses.');
    }
}
