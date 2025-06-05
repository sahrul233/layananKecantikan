<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalAdminModel extends Model
{
    protected $table = 'jadwal_admins';
    protected $fillable = ['tanggal', 'jam'];

    public function jadwalPelanggan()
    {
        return $this->hasMany(JadwalPelangganModel::class, 'jadwal_admins_id');
    }
}

