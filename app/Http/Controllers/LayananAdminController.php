<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananAdminModel;

class LayananAdminController extends Controller
{


    public function index()
    {
        $layanan = LayananAdminModel::all();
        return view('layanan.data_layanan', compact('layanan'));
    }

    public function tambah()
    {
        return view('data_layanan.tambah');
    }

    public function simpan(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        LayananAdminModel::create($validated);

        return redirect('/layanan/data_layanan')->with('success', 'Data layanan berhasil disimpan.');
    }

    public function edit($id)
    {
        $layanan = LayananAdminModel::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
        ]);

        $layanan = LayananAdminModel::findOrFail($id);
        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'kategori' => $request->kategori,
            'durasi' => $request->durasi,
            'harga' => $request->harga,
        ]);

        return redirect('/layanan/data_layanan')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $layanan = LayananAdminModel::findOrFail($id);
        $layanan->delete();

        return redirect('/layanan/data_layanan')->with('success', 'Data berhasil dihapus.');
    }
}

