<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = "tb_sertifikat";
    protected $primaryKey = "id";
    protected $guarded = [ 'id' ]; 
    protected $fillable = [
        'id_siswa',
        'nama_perusahaan',
        'tgl_awal_pkl',
        'tgl_akhir_pkl',
        'tgl_sert_dibuat',
        'divisi',
        'upload_logo',
        'upload_ttd'
    ];
    use HasFactory;

    public function datasiswa()
    {
        return $this->hasOne(DataSiswa::class, 'id', 'id_siswa');
    }
    public function datapembimbing()
    {
        return $this->hasOne(DataPembimbing::class, 'id', 'id_pembimbing');
    }
}
