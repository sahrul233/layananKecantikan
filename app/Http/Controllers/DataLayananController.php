<?php

namespace App\Http\Controllers;

use App\Models\DataLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataLayananController extends Controller
{
    public function index()
    {
        $layanan = DataLayanan::all();
        return view('layanan_admin.data_layanan', compact('layanan'));
    }

    public function tambah()
    {
        return view('layanan_admin/tambah');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = null;
        if ($request->hasFile('gambar')) {
            $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public', $filename);
        }

        DataLayanan::create([
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
            'harga' => $validated['harga'],
            'gambar' => $filename,
        ]);

        return redirect('/layanan_admin/data_layanan')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $layanan = DataLayanan::findOrFail($id);
        return view('layanan_admin/edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $layanan = DataLayanan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($layanan->gambar && Storage::exists('public/' . $layanan->gambar)) {
                Storage::delete('public/' . $layanan->gambar);
            }
            $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->storeAs('public', $filename);
            $layanan->gambar = $filename;
        }

        $layanan->update([
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
            'harga' => $validated['harga'],
            'gambar' => $layanan->gambar,
        ]);

        return redirect('/layanan_admin/data_layanan')->with('success', 'Layanan berhasil diperbarui');
    }

    public function hapus($id)
    {
        $layanan = DataLayanan::findOrFail($id);

        if ($layanan->gambar && Storage::exists('public/' . $layanan->gambar)) {
            Storage::delete('public/' . $layanan->gambar);
        }

        $layanan->delete();
        return redirect('/layanan_admin/data_layanan')->with('success', 'Layanan berhasil dihapus');
    }
}
