<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelangganModel;

class JadwalPelangganController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('jadwal_pelanggan', $data);
    }
}
