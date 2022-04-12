<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\SuratPkl;
use PDF;
use Carbon\Carbon;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $datas = SuratPkl::where('id',$id)->first()->load('siswa');
        $date = Carbon::now();
        $data = [
            'date' => date('m/d/Y'),
            'nosurat' => $datas->no_surat,
            'siswa' => [
                [
                    'nama' => $datas->siswa->nama,
                    'nis'  => $datas->siswa->nis,
                    'jurusan' => $datas->siswa->jurusans->jurusan 
                ]
            ],
            'penjabat' => $datas->penjabat ,
            'namaperusahaan' => $datas->perusahaan,
            'alamatperusahaan' => $datas->alamat_perusahaan
        ];
          
        $pdf = PDF::loadView('surat.suratpermohonan', $data);
    
        return $pdf->stream($datas->siswa->nama . ' - permohonana.pdf');
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