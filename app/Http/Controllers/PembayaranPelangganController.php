<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranPelangganModel;
use App\Models\DataLayanan;

class PembayaranPelangganController extends Controller
{
    public function index()
    {
        return view('/pembayaran_pelanggan');
    }
    // Menampilkan daftar layanan
    // public function listLayanan()
    // {
    //     $layanans = DataLayanan::all();
    //     return view('layanan_pelanggan', compact('layanans'));
    // }

    // Menampilkan halaman pembayaran berdasarkan ID layanan
    // public function index($id)
    // {
    //     $layanan = DataLayanan::find($id);

    //     if (!$layanan) {
    //         return redirect()->route('layanan.list')->with('error', 'Layanan tidak ditemukan.');
    //     }

    //     return view('pembayaran_pelanggan', compact('layanan'));
    // }

    // // Memproses pembayaran
    // public function processPayment(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'metode_pembayaran' => 'required|string',
    //         'catatan' => 'nullable|string',
    //         'total_harga' => 'required|numeric',
    //         'layanan_id' => 'required|exists:layanans,id',
    //     ]);

    //     PembayaranPelangganModel::create([
    //         'layanans_id' => $validatedData['layanan_id'],
    //         'metode_pembayaran' => $validatedData['metode_pembayaran'],
    //         'catatan' => $validatedData['catatan'],
    //         'total_harga' => $validatedData['total_harga'],
    //     ]);

    //     return redirect()->route('layanan.list')->with('success', 'Pembayaran berhasil diproses.');
    // }
}
