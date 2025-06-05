<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory

class PembayaranAdminModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'layanans_id', // ID layanan yang dibayar
        'metode_pembayaran',
        'catatan',
        'total_harga',
        'status', // Status pembayaran (misalnya: pending, berhasil, gagal)
    ];
    public function layanan()
    {
        return $this->belongsTo(LayananAdminModel::class, 'layanans_id');
    }
}
