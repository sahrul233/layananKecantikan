<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananModel;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('layanan_pelanggan', $data);
    }
}
