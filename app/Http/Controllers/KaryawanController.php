<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.data_karyawan', compact('karyawan'));
    }
    public function tambah()
{
    return view('karyawan.tambah');
}
public function simpan(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'no_hp' => 'required|string|max:255',
        'email' => 'required|string|max:255',

    ]);

    Karyawan::create($validated);

    return redirect('/karyawan/data_karyawan')->with('success', 'Data karyawan berhasil disimpan.');
}

public function edit($id)
{
    $karyawan = Karyawan::findOrFail($id);
    return view('karyawan.edit', compact('karyawan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'no_hp' => 'required|string|max:15',
        'email' => 'nullable|email',
    ]);

    $karyawan = Karyawan::findOrFail($id);
    $karyawan->update([
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
    ]);

    return redirect('/karyawan/data_karyawan')->with('success', 'Data berhasil diperbarui.');
}
public function destroy($id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->delete();

    return redirect('/karyawan/data_karyawan')->with('success', 'Data berhasil dihapus.');
}

}
