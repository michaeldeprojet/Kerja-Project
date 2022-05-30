<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPkl extends Model
{
    protected $table = "tb_surat_pkl";
    protected $guarded = ['id']; 
    protected $fillable = [
        'id_siswa',
        'no_surat',
        'penjabat',
        'tgl_surat',
        'perusahaan',
        'alamat_perusahaan',
        'upload_file',
        'Type'
    ];

    public function siswa(){
        return $this->hasOne(DataSiswa::class, 'id' , 'id_siswa');
    }

}
