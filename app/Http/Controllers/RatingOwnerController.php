<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingOwnerController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
        ];

        return view('rating_owner', $data);
    }
}
