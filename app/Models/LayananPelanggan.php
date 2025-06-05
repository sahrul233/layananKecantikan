<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananPelanggan extends Model
{
    protected $table = 'layanan_pelanggan';

    protected $fillable = [
        'pelanggans_id',
        'layanans_id',
    ];

    // Relasi ke layanan
    public function layanan()
    {
        return $this->belongsTo(DataLayanan::class, 'layanans_id');
    }
}

