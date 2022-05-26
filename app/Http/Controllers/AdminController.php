<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataSiswaImport;
use App\Imports\PegawaiImport;
use App\Imports\PesertaPermohonanKelompokImport;
use App\Models\Pegawai;
use App\Models\DataSiswa;
use App\Models\SuratPkl;
use App\Models\Penentuan;

class AdminController extends Controller
{
    public function admin()
    {
        $keseluruhan = DataSiswa::all()->count();
        $siswaPKL = Penentuan::all()->count();
        $belumPKL = $keseluruhan-$siswaPKL;
        return view ('admin.dashboard', [
            'keseluruhan' => $keseluruhan,
            'siswaPKL' => $siswaPKL,
            'belumPKL' => $belumPKL
        ]);
    }

    public function inputsiswa()
    {
        return view ('admin.inputsiswa');
    }

    public function inputpembimbing()
    {
        return view ('admin.inputpembimbing');
    }

    public function profile()
    {
        return view ('admin.profile');
    }

    // SURAT
    public function suratpengantar()
    {
        return view ('admin.suratpengantar');
    }

    public function GetDataSurat(Request $request){
        $DataSurat = SuratPkl::where('no_surat',$request->surat)->get();
        for ($i=0; $i < $DataSurat->count(); $i++) { 
            $data[$i] = [
                $nama = $DataSurat[$i]->siswa->nama,
                $nis = $DataSurat[$i]->siswa->nis,
                $nisn = $DataSurat[$i]->siswa->nisn,
                $jurusan = $DataSurat[$i]->siswa->jurusans->jurusan,
            ];
        }
        return response()->json($data);
    }

    public function suratpermohonan()
    {
        $datas = SuratPkl::all();
        $no_surat = SuratPkl::select('no_surat')->distinct()->get();
        return view ('admin.suratpermohonan',compact('datas','no_surat'));
    }

    public function suratpermohonanpeserta()
    {
        $siswas = DataSiswa::all();
        return view ('admin.suratpermohonanpeserta', compact('siswas'));
    }

    public function suratpermohonankelompok()
    {
        $datas = SuratPkl::all();
        return view ('admin.suratpermohonankelompok', compact('datas'));
    }

    public function getData($id){
        $datas = DataSiswa::where('id',$id)->first()->load('jurusans');
        return response()->json($datas);
    }
    public function simpanPermohonanPeserta(Request $request)
    {
        dd($request);
        SuratPkl::create([
            'id_siswa' =>$request->id_peserta,
            'no_surat' =>$request->nosurat,
            'penjabat' =>$request->namapejabat,
            'tgl_surat' =>$request->tanggal,
            'perusahaan' =>$request->namainstusi,
            'alamat_perusahaan' =>$request->alamatinstusi,
            'upload_file' => 'null',
            'Type' => 'null',
        ]);
        return redirect('/suratpermohonanadmin');
    }

    public function delete($id)
    {
        $datas = SuratPkl::find($id);
        $datas->delete();
        return redirect('/suratpermohonanadmin'); 
    }

    public function simpanpermohonankelompok(Request $request)
    {
        $import = new PesertaPermohonanKelompokImport;
        $datasiswa = DataSiswa::all();
        Excel::import( $import , $request->file('file'));
        $data = $import->data;
        for ($i=0; $i < count($data); $i++) { 
            $peserta[$i] = $datasiswa->where('nama',$data[$i]['nama'])->where('nis',$data[$i]['nis'])->where('nisn',$data[$i]['nisn'])->where('jenis_kelamin',$data[$i]['jk'])->first();
        }
        for ($i=0; $i < count($peserta); $i++) { 
            SuratPkl::create([
                'id_siswa' =>$peserta[$i]->id,
                'no_surat' =>$request->nosurat,
                'penjabat' =>$request->namapejabat,
                'tgl_surat' =>$request->tanggal,
                'perusahaan' =>$request->namainstusi,
                'alamat_perusahaan' =>$request->alamatinstusi,
                'upload_file' => 'null',
                'Type' => 'null',
            ]);
        }
        return redirect('/suratpermohonanadmin');
    }

    public function importdatasiswa(Request $request)
    {
        Excel::import(new DataSiswaImport, $request->file('file'));
        return redirect()->back();
    }

    public function downloadFilePDF()
    {
    	$filePath = public_path("pdf/Kata Pengantar PKL.pdf");
    	$headers = ['Content-Type: application/pdf'];
        $fileName = 'Kata Pengantar PKL.pdf';

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName, $headers);
        } else {
            echo('File not found.');
        }


    }

    public function rekapdatasiswa()
    {
        return view ('admin.rekapdatasiswa');
    }

    public function rekapdaftarnilai()
    {
        return view ('admin.rekapdaftarnilai');
    }

    public function rekaphasillaporan()
    {
        return view ('admin.rekaphasillaporan');
    }
}
