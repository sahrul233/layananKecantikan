<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalAdminModel;

class JadwalAdminController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('jadwal_admin', $data);
    }
}
