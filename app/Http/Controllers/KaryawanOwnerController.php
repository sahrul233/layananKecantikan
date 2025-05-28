<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanOwnerController extends Controller
{
     public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('karyawan_owner', $data);
    }
}
