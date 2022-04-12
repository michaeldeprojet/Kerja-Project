<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPkl extends Model
{
    protected $table = "tb_surat_pkl";
    protected $guarded = [
        'id'
    ]; 

    public function siswa(){
        return $this->hasOne(DataSiswa::class, 'id' , 'id_siswa');
    }

}
