<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalAdminModel;
use App\Models\JadwalPelangganModel;

class JadwalAdminController extends Controller
{
    public function index()
    {
        $jadwalPelanggan = JadwalPelangganModel::with(['pelanggan', 'jadwalAdmin', 'karyawan'])->get();
        return view('jadwal_admin', compact('jadwalPelanggan'));
    }

    public function create()
    {
        return view('jadwal_admin_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam' => 'required'
        ]);

        JadwalAdminModel::create($request->all());

        return redirect()->route('jadwal_admin')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $jadwal = JadwalAdminModel::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal_admin')->with('success', 'Jadwal berhasil dihapus.');
    }
}
