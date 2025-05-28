<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganOwnerController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('pelanggan_owner', $data);
    }
}
