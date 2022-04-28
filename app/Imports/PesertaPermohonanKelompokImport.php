<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PesertaPermohonanKelompokImport implements ToCollection, SkipsEmptyRows, WithStartRow
{
    public function rules(): array
    {
        return [
            'nama' => [
                'required',
            ],
            'jk' => [
                'required',
            ],
            'nis' => [
                'required',
            ],
            'nisn' => [
                'required',
            ],
            'jurusan_id' => [
                'required',
            ],
        ];
    }

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param Collection $collection
    */

    public $data;
    public function collection(Collection $collection)
    {
        $n = 0;
        foreach ($collection as $row) 
        {
            $data[$n] = [
                'nama' => $row[0],
                'jk' => $row[1],
                'nis' => $row[2],
                'nisn' => $row[3],
                'jurusan_id' => $row[7],
            ];
            $n++;
        }
        $this->data = $data;
    }
}
