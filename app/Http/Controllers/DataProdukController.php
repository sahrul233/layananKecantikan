<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataProdukModel;

class DataProdukController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];
        return view('data_produk', $data);
    }

    public function tambah()
    {
        return view('data_produk-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $data_produk = new DataProdukModel(); // konsisten dengan model yang digunakan
        $data_produk->nama_produk = $request->nama_produk;
        $data_produk->harga = $request->harga;
        $data_produk->stok = $request->stok;

        $data_produk->save();
        return redirect('/data_produk')->with('success', 'Data Produk berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => DataProdukModel::findOrFail($id)
        ];
        return view('data_produk-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $data_produk = DataProdukModel::findOrFail($id);
        $data_produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('/data_produk')->with('success', 'Data Produk berhasil diedit.');
    }

    public function hapus($id)
    {
        $data_produk = DataProdukModel::findOrFail($id);
        $data_produk->delete();

        return back()->with('success', 'Data Produk berhasil dihapus.');
    }
}
