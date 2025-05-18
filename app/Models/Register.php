<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika nama model ≠ nama tabel)
    protected $table = 'register';

    // Kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'password',
        'telepon',
    ];

    // Jika password akan disimpan dalam bentuk hash
    protected $hidden = [
        'password',
    ];
}
