<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Model
{
    protected $fillable = [
    'nama_lengkap',
    'no_hp',
    'email',
    'alamat',
    'umur',
    'jenis_kelamin',
    'karyawans_id',
    'data_layanans_id',
    'tempat',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawans_id');
    }

    public function layanan()
    {
        return $this->belongsTo(DataLayanan::class, 'data_layanans_id');
    }

}
