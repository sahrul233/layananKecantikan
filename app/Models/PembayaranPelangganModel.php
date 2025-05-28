<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory
use Illuminate\Database\Eloquent\Model;

class PembayaranPelangganModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan_id', // ID layanan yang dibayar
        'metode_pembayaran',
        'catatan',
        'total_harga',
    ];

    // Relasi dengan model LayananAdminModel
    public function layanan()
    {
        return $this->belongsTo(LayananAdminModel::class, 'layanan_id');
    }
}
