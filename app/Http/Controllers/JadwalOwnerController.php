<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalOwnerController extends Controller
{
     public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('jadwal_owner', $data);
    }
}
