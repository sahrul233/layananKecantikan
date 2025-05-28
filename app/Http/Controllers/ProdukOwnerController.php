<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukOwnerController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('produk_owner', $data);
    }
}
