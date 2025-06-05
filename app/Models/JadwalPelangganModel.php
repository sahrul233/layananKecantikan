<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPelangganModel extends Model
{
    protected $table = 'jadwal_pelanggans';
    protected $fillable = ['pelanggans_id', 'jadwal_admins_id', 'status'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggans_id');
    }

    public function jadwalAdmin()
    {
        return $this->belongsTo(JadwalAdminModel::class, 'jadwal_admins_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawans_id');
    }
}
