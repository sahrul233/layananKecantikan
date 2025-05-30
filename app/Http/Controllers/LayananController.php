<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];
        return view('layanan_pelanggan', $data);
    }

    public function tambah()
    {
        return view('layanan_pelanggan-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $layanan = new Layanan(); // konsisten dengan model yang digunakan
        $layanan->nama = $request->nama;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->harga = $request->harga;
        $layanan->gambar = $request->gambar;

        $layanan->save();
        return redirect('/layanan_pelanggan')->with('success', 'layanan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => Layanan::findOrFail($id)
        ];
        return view('layanan_pelanggan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);
        return redirect('/layanan_pelanggan')->with('success', 'layanan berhasil diedit.');
    }

    public function hapus($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return back()->with('success', 'layanan berhasil dihapus.');
    }
}
