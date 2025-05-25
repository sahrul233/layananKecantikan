<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingUlasanModel;

class RatingUlasanController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];
        return view('rating_ulasan', $data);
    }

    public function tambah()
    {
        return view('rating_ulasan-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $rating_ulasan = new RatingUlasanModel(); // konsisten dengan model yang digunakan
        $rating_ulasan->nama = $request->nama;
        $rating_ulasan->rating = $request->rating;
        $rating_ulasan->ulasan = $request->ulasan;
        $rating_ulasan->tanggal = $request->tanggal;

        $rating_ulasan->save();
        return redirect('/rating_ulasan')->with('success', 'rating dan ulasan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => RatingUlasanModel::findOrFail($id)
        ];
        return view('rating_ulasan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $rating_ulasan = RatingUlasanModel::findOrFail($id);
        $rating_ulasan->update([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('/rating_ulasan')->with('success', 'rating dan ulasan berhasil diedit.');
    }

    public function hapus($id)
    {
        $rating_ulasan = RatingUlasanModel::findOrFail($id);
        $rating_ulasan->delete();

        return back()->with('success', 'rating dan ulasan berhasil dihapus.');
    }
}
