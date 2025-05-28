<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembayaranOwnerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'layanan_id', // ID layanan yang dibayar
        'metode_pembayaran',
        'catatan',
        'total_harga',
        'status', // Status pembayaran (misalnya: pending, berhasil, gagal)
    ];
    public function layanan()
    {
        return $this->belongsTo(LayananAdminModel::class, 'layanan_id');
    }
}
