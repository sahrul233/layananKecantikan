<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pelanggan extends Model
{
    use Notifiable;

    protected $fillable = [
        'nama_lengkap',
        'no_hp',
        'email',
        'alamat',
        'umur',
        'jenis_kelamin',
        'karyawan_id',
        'tempat',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
