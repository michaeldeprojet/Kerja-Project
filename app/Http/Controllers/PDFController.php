<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $date = Carbon::now();
        $data = [
            'date' => $date->day.' '.$date->locale('in')->monthName.' '.$date->year, 
            'siswa' => [
                [
                    'nama' => 'michael',
                    'nis'  => '129102',
                    'jurusan' => 'RPL' 
                ]
            ],
            'penjabat' => 'nama' ,
            'namaperusahaan' => 'namaperusahaan',
            'alamatperusahaan' => 'alamatperusahaan'
        ];
          
        $pdf = PDF::loadView('surat.suratpermohonan', $data);
    
        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function generatesuratkel()
    {
        $data = [
            'date' => date('m/d/Y'),
            'siswa' => [
                [
                    'no' => '1',
                    'nama' => 'Michael Danu Ekklasiya',
                    'kompetensikeahlian'  => 'Rekayasa Perangkat Lunak',
                    'kelas' => 'XII' 
                ],
                [
                    'no' => '',
                    'nama' => '',
                    'kompetensikeahlian'  => '',
                    'kelas' => '' 
                ]
            ],
            'penjabat' => 'nama' ,
            'namaperusahaan' => 'namaperusahaan',
            'alamatperusahaan' => 'alamatperusahaan'
        ];
          
        $pdf = PDF::loadView('surat.suratpermohonan2', $data);
    
        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function generatenilaipkl()
    {
        $data = [
            'siswa' => [
                [
                    'nama' => '',
                    'kelas' => '',
                    'semester' => '',
                    'jurusan' => ''
                ]
            ],
            'namaperusahaan' => '',
            'namainstruktur' => ''
        ];
          
        $pdf = PDF::loadView('penilaian.inputpenilaian', $data);
    
        return $pdf->stream('itsolutionstuff.pdf');
    }
}