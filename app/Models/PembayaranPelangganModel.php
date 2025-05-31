<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranPelangganModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan_id',
        'metode_pembayaran',
        'catatan',
        'total_harga',
    ];

    public function layanan()
    {
        return $this->belongsTo(DataLayanan::class, 'layanan_id');
    }
}
