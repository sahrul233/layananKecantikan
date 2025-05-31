<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelangganModel;
class JadwalOwnerController extends Controller
{
    public function index(){
    $data = [
        'no' => 1,
        'data_jadwal' => JadwalPelangganModel::all()
    ];
    return view('jadwal_owner', $data);
    }
}
