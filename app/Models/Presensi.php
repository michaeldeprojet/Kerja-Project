<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $table = 'tb_daftar_hadir';
    protected $fillable = [
        'id_siswa',
        'tgl_pkl',
        'nama_perusahaan',
        'keterangan',
        'alasan'
    ];

    public function datasiswa()
    {
        return $this->hasOne(DataSiswa::class, 'id', 'id_siswa');
    }

    use HasFactory;
}
