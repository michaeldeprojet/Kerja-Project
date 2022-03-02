<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Authenticatable
{
    use HasFactory;

    protected $table = 'login';

    const ADMIN = 'ADMIN';
    const KAKOMLI = 'KAKOMLI';
    const PEMBIMBING = 'PEMBIMBING';
    const SISWA = 'SISWA';
}
