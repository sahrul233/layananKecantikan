<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelangganModel;

class JadwalPelangganController extends Controller
{
    public function index()
    {
        $jadwal = JadwalPelangganModel::with(['pelanggan', 'jadwalAdmin', 'karyawan'])->get();
        return view('jadwal_pelanggan', compact('jadwal'));
    }

    public function destroy($id)
    {
        $jadwal = JadwalPelangganModel::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal_pelanggan')->with('success', 'Jadwal berhasil dibatalkan.');
    }
}
