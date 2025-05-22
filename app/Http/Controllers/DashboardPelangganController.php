<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPelangganController extends Controller
{
     public function index()
    {
        return view('dashboard_pelanggan',);
    }
    
}
