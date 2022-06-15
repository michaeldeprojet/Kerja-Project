<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Authenticatable
{
    protected $table = "tb_siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'jenis_kelamin', 'nis', 'nisn', 'email', 'tempat_lahir', 'tanggal_lahir', 'jurusan_id', 'pembimbing_id'
    ];

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }

    public function pembimbings()
    {
        return $this->hasOne(DataPembimbing::class, 'id', 'pembimbing_id');
    }

    public function suratPkl()
    {
        return $this->hasOne(SuratPkl::class, 'id', 'id_siswa');
    }

}
