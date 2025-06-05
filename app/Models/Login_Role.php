<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login_Role extends Authenticatable
{
    protected $table = 'login__roles'; // Sesuai dengan nama tabel di migration

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];
}

