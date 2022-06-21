<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\InputNilai;
use Illuminate\Http\Request;
use App\Models\SuratPkl;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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

    public function generatenilaipkl($id)
    {
        $score = InputNilai::findOrFail($id);
        $student = DataSiswa::with(['jurusans', 'suratPkl'])->findOrFail($score->id_siswa);

        //json_decode buat ngerubah json string ke array assosiatif php
        $attitudeScores = json_decode($score->nilai_aspek_sikap, true);
        $knowledgeScores = json_decode($score->nilai_aspek_pengetahuan, true);
        $skillScores = json_decode($score->nilai_aspek_keterampilan, true);
        $reportScore = json_decode($score->nilai_catatan_laporan, true);

        $data = [
            'siswa' => [
                'nama' => $student->nama,
                'kelas' => '',
                'semester' => '',
                'jurusan' => $student->jurusans->jurusan
            ],
            'namaperusahaan' => $score->nama_industri,
            'namainstruktur' => $score->instruktur,
            'attitudes' => $attitudeScores,
            'knowledges' => $knowledgeScores,
            'skills' => $skillScores,
            'report' => $reportScore,
            'finalScore' => $score->nilai_akhir
        ];

        $pdf = PDF::loadView('penilaian.inputpenilaian', $data);

        $content = $pdf->download()->getOriginalContent();

        $replacedName = str_replace(' ', '_', $student->nama);

        $filename = "Nilai_PKL_$replacedName.pdf";

        Storage::disk('public_uploads')->put("pdf/nilai_pkl/$filename", $content);

        $score->upload_file = $filename;
        $score->save();

        return $pdf->stream("$filename");
    }
}
