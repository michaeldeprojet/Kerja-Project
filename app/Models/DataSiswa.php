<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_siswa extends Model
{
    protected $table = "tb_siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        `id`, `nama`, `nis`, `nisn`, `email`, `tempat_lahir`, `tanggal_lahir`, `kompetensi_keahlian`, `status_pkl`, `jenis_kelamin`, `created_at`, `updated_at`
    ]
}
