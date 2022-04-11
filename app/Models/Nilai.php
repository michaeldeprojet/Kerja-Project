<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'tb_input_nilai';
    protected $fillable = [
        'id',
        'id_siswa',
        'kelas',
        'semster',
        'jurusan_id',
        'nama_pt',
        'nama_industri',
        'instruktur',
        'nilai_laporan',
        'nilai_aspek_sikap',
        'nilai_aspek_pengetahuan',
        'nilai_aspek_keterampilan',
        'nilai_rata_rata',
        'nilai_akhir',
        'upload_file'
    ];

    public function datasiswa()
    {
        return $this->hasOne(DataSiswa::class, 'id', 'id_siswa');
    }

    public function jurusans()
    {
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }
}
