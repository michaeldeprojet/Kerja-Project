<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembimbing extends Model
{
    protected $table = "tb_pembimbing";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'no_hp', 'alamat', 'email', 'tempat_lahir', 'tanggal_lahir', 'jurusan_id'
    ];

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id' , 'jurusan_id');
    }

    use HasFactory;
}
