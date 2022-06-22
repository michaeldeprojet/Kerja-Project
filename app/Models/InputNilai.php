<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputNilai extends Model
{
    use HasFactory;
    protected $table = "tb_input_nilai";

    public function student() {
        return $this->belongsTo(DataSiswa::class, 'id_siswa', 'id');
    }
}
