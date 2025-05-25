<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPelangganModel;


class DataPelangganController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('data_pelanggan', $data);
    }

    public function tambah()
    {
        return view('data_pelanggan-tambah');
    }

    public function action_tambah(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomer_telfon' => 'required|numeric',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'tempat' => 'required|string',
            'layanan' => 'required|array', // Ensure that at least one service is selected
            'layanan.*' => 'string' // Each selected service should be a string
        ]);

        $data_pelanggan = new DataPelangganModel();
        $data_pelanggan->nama_lengkap = $request->nama_lengkap;
        $data_pelanggan->nomer_telfon = $request->nomer_telfon;
        $data_pelanggan->email = $request->email;
        $data_pelanggan->alamat = $request->alamat;
        $data_pelanggan->pilihan_tempat = $request->pilihan_tempat;
        $data_pelanggan->layanan = implode(', ', $request->layanan); // Save selected services as a comma-separated string

        $data_pelanggan->save();
        return redirect('/data_pelanggan')->with('success', 'Data Layanan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => DataPelangganModel::findOrFail($id)
        ];
        return view('data_pelanggan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            // Add other fields as necessary
        ]);

        $data_pelanggan = DataPelangganModel::findOrFail($id);
        $data_pelanggan->update([
            'nama_lengkap' => $request->nama_lengkap,
            // Update other fields as necessary
        ]);
        return redirect('/data_pelanggan')->with('success', 'data pelanggan berhasil diedit.');
    }

    public function hapus($id)
    {
        $data_pelanggan = DataPelangganModel::findOrFail($id);
        $data_pelanggan->delete();

        return back()->with('success', 'Reservasi berhasil dihapus.');
    }
}
