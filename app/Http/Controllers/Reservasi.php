<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservasi extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1
        ];

        return view('reservasi', $data);
    }

}
