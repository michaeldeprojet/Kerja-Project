<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'nis', 
        'nisn',
        'no_hp',
        'email', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jurusan_id', 
        'role',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }
    
    const ADMIN = 'ADMIN';
    const KAKOMLI = 'KAKOMLI';
    const PEMBIMBING = 'PEMBIMBING';
    const SISWA = 'SISWA';
}
