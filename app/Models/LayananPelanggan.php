<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananPelanggan extends Model
{
    protected $table = 'layanan_pelanggan';

    protected $fillable = [
        'pelanggan_id',
        'layanan_id',
    ];

    // Relasi ke layanan
    public function layanan()
    {
        return $this->belongsTo(DataLayanan::class, 'layanan_id');
    }
}

