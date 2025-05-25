<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKaryawanModel;

class DatakaryawanController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];
        return view('data_karyawan', $data);
    }

    public function tambah()
    {
        return view('data_karyawan-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $data_karyawan = new DataKaryawanModel(); // konsisten dengan model yang digunakan
        $data_karyawan->nama = $request->nama;
        $data_karyawan->jabatan = $request->jabatan;
        $data_karyawan->nomer_telfon = $request->nomer_telfon;
        $data_karyawan->email = $request->email;

        $data_karyawan->save();
        return redirect('/data_karyawan')->with('success', 'Data Karyawan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => DataKaryawanModel::findOrFail($id)
        ];
        return view('data_karyawan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $data_karyawan = DataKaryawanModel::findOrFail($id);
        $data_karyawan->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'nomer_telfon' => $request->nomer_telfon,
            'email' => $request->email,
        ]);
        return redirect('/data_karyawan')->with('success', 'Data karyawan berhasil diedit.');
    }

    public function hapus($id)
    {
        $data_karyawan = DataKaryawanModel::findOrFail($id);
        $data_karyawan->delete();

        return back()->with('success', 'Data Karyawan berhasil dihapus.');
    }
}
