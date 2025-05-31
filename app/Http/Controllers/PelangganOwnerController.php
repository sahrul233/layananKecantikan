<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganOwnerController extends Controller
{
     public function index(){
    $data = [
        'no' => 1,
        'data_pelanggan' => Pelanggan::all()
    ];
    return view('pelanggan_owner', $data);
    }
}
