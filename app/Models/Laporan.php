<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "tb_laporan_pkl";
    protected $guarded = [ 'id' ]; 
    protected $fillable = [
        'id_siswa',
        'periode_pkl',
        'perusahaan',
        'id_pembimbing',
        'divisi',
        'upload_file',
    ];

    public function siswa(){
        return $this->hasOne(DataSiswa::class, 'id' , 'id_siswa');
    }

    public function pembimbing(){
        return $this->hasOne(DataPembimbing::class, 'id' , 'id_pembimbing');
    }

    use HasFactory;

}
