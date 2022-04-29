<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAkunSiswa extends Model
{
    protected $table = "tb_akun_siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'nis', 
        'nisn', 
        'email', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jurusan_id', 
        'role',
        'password',
        'username', 
    ];

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }

    const SISWA = 'SISWA';
    
}
