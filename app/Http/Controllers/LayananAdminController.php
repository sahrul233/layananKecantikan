<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananAdminModel;

class LayananAdminController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];
        return view('layanan_admin', $data);
    }

    public function tambah()
    {
        return view('layanan_admin-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $layanan_admin = new LayananAdminModel(); // konsisten dengan model yang digunakan
        $layanan_admin->nama = $request->nama;
        $layanan_admin->deskripsi = $request->deskripsi;
        $layanan_admin->harga = $request->harga;
        $layanan_admin->gambar = $request->gambar;

        $layanan_admin->save();
        return redirect('/layanan_admin')->with('success', 'layanan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => LayananAdminModel::findOrFail($id)
        ];
        return view('layanan_admin-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $layanan_admin = LayananAdminModel::findOrFail($id);
        $layanan_admin->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);
        return redirect('/layanan_admin')->with('success', 'layanan berhasil diedit.');
    }

    public function hapus($id)
    {
        $layanan_admin = LayananAdminModel::findOrFail($id);
        $layanan_admin->delete();

        return back()->with('success', 'layanan berhasil dihapus.');
    }
}

