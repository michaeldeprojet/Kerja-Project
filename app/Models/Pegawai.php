<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'jenis_kelamin', 'nis', 'nisn', 'email', 'tempat_lahir', 'tanggal_lahir', 'kompetensi_keahlian'
    ];
}
