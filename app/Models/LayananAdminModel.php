<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananAdminModel extends Model
{
    protected $table = 'layanans';

    protected $fillable = [
        'nama_layanan',
        'kategori',
        'durasi',
        'harga',
    ];
}
