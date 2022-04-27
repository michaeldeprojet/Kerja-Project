<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataSiswaImport;
use App\Imports\PegawaiImport;
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

    public function suratpermohonan()
    {
        $datas = SuratPkl::all();
        return view ('admin.suratpermohonan',compact('datas'));
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
        SuratPkl::create([
            'id_siswa' => 'null',
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

    public function importdatasiswa(Request $request)
    {
        Excel::import(new DataSiswaImport, $request->file('file'));
        return redirect()->back();
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