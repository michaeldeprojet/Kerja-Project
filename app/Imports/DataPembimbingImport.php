<?php

namespace App\Imports;

use App\Models\DataPembimbing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataPembimbingImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row ['nama']) {
            return new DataPembimbing([
                'nama'=>$row['nama'],
                'no_hp'=>$row['no_hp'], 
                'alamat'=>$row['alamat'], 
                'email'=>$row['email'],
                'tempat_lahir'=>$row['tempat_lahir'],
                'tanggal_lahir'=>$row['tanggal_lahir'],
                'jurusan_id'=>$row['kompetensi_keahlian']
            ]);
        }
    }
}
