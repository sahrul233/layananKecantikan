<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranPelangganModel;

class PembayaranPelangganController extends Controller
{
    public function index()
    {
        return view('pembayaran_pelanggan');
    }

   public function processPayment(Request $request)
    {
        $validatedData = $request->validate([
            'metode_pembayaran' => 'required|string',
            'catatan' => 'nullable|string',
            'total_harga' => 'required|numeric',
        ]);
        $pembayaran = new PembayaranPelangganModel();
        $pembayaran->layanan_id = $request->layanan_id; // Pastikan Anda mengirimkan ID layanan
        $pembayaran->metode_pembayaran = $validatedData['metode_pembayaran'];
        $pembayaran->catatan = $validatedData['catatan'];
        $pembayaran->total_harga = $validatedData['total_harga'];
        $pembayaran->save();

        return redirect('/pembayaran_pelanggan')->with('success', 'Pembayaran berhasil diproses.');
    }
}
