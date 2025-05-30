<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';

    protected $fillable = [
        'nama',
        'jabatan',
        'no_hp',
        'email',
    ];

    /**
     * Relasi: Satu karyawan memiliki banyak pelanggan
     */
    public function pelanggans()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
