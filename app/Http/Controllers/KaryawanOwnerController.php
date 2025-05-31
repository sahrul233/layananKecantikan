<?php

namespace App\Http\Controllers;


use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanOwnerController extends Controller
{
     public function index(){
    $data = [
        'no' => 1,
        'data_karyawan' => Karyawan::all()
    ];
    return view('karyawan_owner', $data);
    }

}
