<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingPelangganModel;

class RatingPelangganController extends Controller
{
    public function index()
{
    $data = [
        'no' => 1,
        'rating_pelanggan' => RatingPelangganModel::all()
    ];
    return view('rating_pelanggan', $data);
}


    public function tambah()
    {
        return view('rating_pelanggan-tambah'); // perbaikan nama view
    }

    public function action_tambah(Request $request)
    {
        $rating_pelanggan = new RatingPelangganModel(); // konsisten dengan model yang digunakan
        $rating_pelanggan->nama = $request->nama;
        $rating_pelanggan->rating = $request->rating;
        $rating_pelanggan->ulasan = $request->ulasan;
        $rating_pelanggan->tanggal = $request->tanggal;

        $rating_pelanggan->save();
        return redirect('/rating_pelanggan')->with('success', 'rating dan ulasan berhasil ditambah.');
    }

    public function edit($id)
    {
        $data = [
            'detail' => RatingPelangganModel::findOrFail($id)
        ];
        return view('rating_pelanggan-edit', $data);
    }

    public function action_edit($id, Request $request)
    {
        $rating_pelanggan = RatingPelangganModel::findOrFail($id);
        $rating_pelanggan->update([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('/rating_pelanggan')->with('success', 'rating dan ulasan berhasil diedit.');
    }

    public function hapus($id)
    {
        $rating_pelanggan = RatingPelangganModel::findOrFail($id);
        $rating_pelanggan->delete();

        return back()->with('success', 'rating dan ulasan berhasil dihapus.');
    }
}
