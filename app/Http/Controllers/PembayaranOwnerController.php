<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranOwnerModel;

class PembayaranOwnerController extends Controller
{
     public function index()
    {
        return view('/pembayaran_owner');
    }

    public function show($id)
    {
        $pembayaran = PembayaranOwnerModel::with('layanan')->findOrFail($id);
        return view('/pembayaran_owner-detail', compact('pembayaran'));
    }
}
