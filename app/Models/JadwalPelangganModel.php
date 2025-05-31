<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPelangganModel extends Model
{
    protected $table = 'jadwal_pelanggan';
    protected $fillable = ['pelanggan_id', 'jadwal_admin_id', 'status'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }

    public function jadwalAdmin()
    {
        return $this->belongsTo(JadwalAdminModel::class, 'jadwal_admin_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
