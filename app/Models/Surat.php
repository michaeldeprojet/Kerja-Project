<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = "tb_surat_pkl";
    protected $fillable = [
        'id_siswa',
        'no_surat',
        'penjabat',
        'tgl_surat',
        'perusahaan',
        'alamat_perusahaan',
        'id_pembimbing',
        'jurusan_id'

    ];

    public function datapembimbing()
    {
        return $this->hasOne(DataPembimbing::class, 'id', 'id_pembimbing');
    }
    
    public function datasiswa()
    {
        return $this->hasOne(DataSiswa::class, 'id', 'id_siswa');
    }

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }

    use HasFactory;

}