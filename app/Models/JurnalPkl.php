<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalPkl extends Model
{
    protected $table = 'tb_jurnal_pkl';
    protected $fillable = [
        'id_siswa',
        'tgl_pkl',
        'id_pembimbing',
        'nama_perusahaan',
        'divisi',
        'minggu',
        'kegiatan',
        'hasil',
    ];

    use HasFactory;

}
