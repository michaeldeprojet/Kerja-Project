<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalPkl extends Model
{
    protected $table = 'tb_jurnal_pkl';
    protected $fillable = [
        'id_siswa',
        'nis',
        'tgl_pkl',
        'id_pembimbing',
        'nis',
        'nama_perusahaan',
        'divisi',
        'minggu',
        'kegiatan',
        'hasil'
    ];

    public function datasiswa()
    {
        return $this->hasOne(DataSiswa::class, 'id', 'id_siswa');
    }

    public function datapembimbing()
    {
        return $this->hasOne(DataPembimbing::class, 'id', 'id_pembimbing');
    }


    use HasFactory;
}
