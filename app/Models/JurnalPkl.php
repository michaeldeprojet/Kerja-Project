<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalPkl extends Model
{
    protected $table = 'jurnal_pkl';
    protected $fillable = [
        'nama_siswa',
        'tgl_pkl',
        'pembimbing',
        'nis',
        'perusahaan',
        'divisi',
        'minggu',
        'kegiatan',
        'hasil'
    ];

    use HasFactory;
}
