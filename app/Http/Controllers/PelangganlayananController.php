<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLayanan;
use App\Models\LayananPelanggan;


class PelangganlayananController extends Controller
{
    public function index()
    {
        $layanan = DataLayanan::all(); // Ambil semua layanan
        return view('pelanggan_layanan/data_layanan', compact('layanan'));
    }
    public function pesanLayanan($layanan_id)
{
    // Misalnya pelanggan_id diambil dari login (sementara gunakan 1 untuk contoh)
    $pelangganId = auth()->id() ?? 1;

    LayananPelanggan::create([
        'pelanggans_id' => $pelangganId,
        'layanans_id' => $layanan_id,
    ]);

    return redirect('/pelanggan/data_pelanggan')->with('success', 'Layanan berhasil dipesan.');

}
public function riwayat()
{
    $pelangganId = auth()->id() ?? 1; // Ganti dengan autentikasi asli jika sudah
    $pesanan = LayananPelanggan::with('layanan')->where('pelanggan_id', $pelangganId)->get();
    return view('pelanggan_layanan.riwayat', compact('pesanan'));
}
}
