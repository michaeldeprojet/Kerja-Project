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
    public function generatePDF(Request $request)
    {
        $data = SuratPkl::all(); 
        if($data->where('no_surat',$request->no_surat)->count() > 1){
            $datas = SuratPkl::where('no_surat',$request->no_surat)->get()->load('siswa');
            $data = [
                'date' => date('m/d/Y'),
                'siswa' => $datas,
                'penjabat' => $datas[0]->penjabat ,
                'namaperusahaan' => $datas[0]->perusahaan,
                'alamatperusahaan' => $datas[0]->alamat_perusahaan
            ];
              
            $pdf = PDF::loadView('surat.suratpermohonan2', $data);
        
            return $pdf->stream($datas[0]->no_surat . ' - permohonana.pdf'); 
        }
        $datas = SuratPkl::where('no_surat',$request->no_surat)->first()->load('siswa');
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