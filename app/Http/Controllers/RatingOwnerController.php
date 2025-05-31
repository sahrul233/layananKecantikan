<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelangganModel;
class RatingOwnerController extends Controller
{
    public function index(){
    $data = [
        'no' => 1,
        'rating' => JadwalPelangganModel::all()
    ];
    return view('rating_owner', $data);
    }
}
