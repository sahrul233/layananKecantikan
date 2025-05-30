<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLayanan extends Model
{
    use HasFactory;

    protected $table = 'data_layanan'; // nama tabel di database

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
    ];


}
