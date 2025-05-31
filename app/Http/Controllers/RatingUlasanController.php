<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingPelangganModel;
use App\Models\RatingUlasanModel;

class RatingUlasanController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
            'data_rating' => RatingPelangganModel::all()->concat(RatingUlasanModel::all())
        ];
        return view('rating_ulasan', $data);
    }
}
