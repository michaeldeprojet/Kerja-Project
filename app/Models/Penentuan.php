<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penentuan extends Model
{
    protected $table = "tb_penentuan_pkl";
    protected $primaryKey = "id";
    protected $guarded = [ 'id' ]; 
    protected $fillable = [
        'id_siswa',
        'periode',
        'id_pembimbing',
        'tempat_pkl',
        'upload_permohonan'
    ];

    public function siswa(){
        return $this->hasOne(DataSiswa::class, 'id' , 'id_siswa');
    }

    public function tempatPKL()
    {
        return $this->hasOne(SuratPkl::class, 'tempat_pkl', 'tempat_pkl');
    }

    public function pembimbing(){
        return $this->hasOne(DataPembimbing::class, 'id' , 'id_pembimbing');
    }
    
    public function datasiswa()
    {
        return $this->hasOne(SuratPkl::class, 'id' , 'id_siswa');
    }

    use HasFactory;
}
