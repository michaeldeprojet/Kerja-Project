<?php

namespace App\Imports;

use App\Models\DataSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataSiswaImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row ['nama']) {
            return new DataSiswa([
                'jurusan_id'=>$row['kompetensi_keahlian'],
                'nama'=>$row['nama'], 
                'jenis_kelamin'=>$row['jenis_kelamin'],
                'nis'=>$row['nis'],
                'nisn'=>$row['nisn'],
                'email'=>$row['email'],
                'tempat_lahir'=>$row['tempat_lahir'],
                'tanggal_lahir'=>$row['tanggal_lahir']
            ]);
        }
    }
}
