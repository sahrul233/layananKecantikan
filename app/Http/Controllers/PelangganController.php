<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Karyawan;
use App\Models\DataLayanan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::with(['karyawan', 'layanan'])->get();
        return view('pelanggan.data_pelanggan', compact('pelanggan'));
    }

    public function tambah()
    {
        $karyawans = Karyawan::all();
        $layanans = DataLayanan::all();
        return view('pelanggan.tambah', compact('karyawans', 'layanans'));
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap'     => 'required|string|max:255',
            'no_hp'            => 'required|string|max:20',
            'email'            => 'required|email|unique:pelanggans,email',
            'alamat'           => 'required|string',
            'umur'             => 'required|integer|min:0|max:120',
            'jenis_kelamin'    => 'required|in:Laki-laki,Perempuan',
            'karyawans_id'      => 'required|exists:karyawans,id',
            'data_layanans_id'  => 'required|exists:data_layanans,id',
            'tempat'           => 'required|in:Rumah,Salon',
        ]);

        Pelanggan::create($validated);

        return redirect('/pelanggan/data_pelanggan')->with('success', 'Data pelanggan berhasil disimpan.');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $karyawans = Karyawan::all();
        $layanans = DataLayanan::all();
        return view('pelanggan.edit', compact('pelanggan', 'karyawans', 'layanans'));
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap'     => 'required|string|max:255',
            'no_hp'            => 'required|string|max:20',
            'email'            => 'required|email|unique:pelanggans,email,' . $pelanggan->id,
            'alamat'           => 'required|string',
            'umur'             => 'required|integer|min:0|max:120',
            'jenis_kelamin'    => 'required|in:Laki-laki,Perempuan',
            'karyawans_id'      => 'required|exists:karyawans,id',
            'data_layanans_id'  => 'required|exists:data_layanans,id',
            'tempat'           => 'required|in:Rumah,Salon',
        ]);

        $pelanggan->update($validated);

        return redirect('/pelanggan/data_pelanggan')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect('/pelanggan/data_pelanggan')->with('success', 'Data berhasil dihapus.');
    }
}
