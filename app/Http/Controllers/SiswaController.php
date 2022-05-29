<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\DataPembimbing;
use App\Models\JurnalPkl;
use App\Models\DataSiswa;
use App\Models\Laporan;
use App\Models\Penentuan;

class SiswaController extends Controller
{
    public function getData($id){
        $datas = DataSiswa::where('id',$id)->first()->load('jurusans');
        return response()->json($datas);
    }

    public function siswa()
    {
        $keseluruhan = DataSiswa::all()->count();
        $siswaPKL = Penentuan::all()->count();
        $belumPKL = $keseluruhan-$siswaPKL;
        return view ('siswa.dashboard', [
            'keseluruhan' => $keseluruhan,
            'siswaPKL' => $siswaPKL,
            'belumPKL' => $belumPKL
        ]);
    }

    public function profile()
    {
        return view ('siswa.profile');
    }

    public function izin()
    {
        return view ('siswa.izinortu');
    }
    
    public function daftarkehadiran()
    {
        return view ('siswa.daftarkehadiran');
    }
    public function presensi()
    {
        return view ('siswa.presensi');
    }
    public function jurnalpkl()
    {
        $data = JurnalPkl::all();
        return view ('siswa.jurnalpkl',compact('data'));
    }
    public function jurnal()
    {
        return view ('siswa.jurnal');
    }

    //CRUD LAPORAN

    public function index()
    {
        $datas= Laporan::all();
        return view('siswa.datalaporan', compact('datas'));
    }

    public function create()
    {
        $data1 = DataSiswa ::all();
        $data2 = DataPembimbing::all();
        return view ('siswa.laporan',compact('data1', 'data2'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'upload_file' => 'required|mimes:doc,docx,xls,xlsx,pdf,jpg,jpeg,png,bmp'
        ]);

        Laporan::create([
        'id_siswa' =>$request->id_siswa,
        'periode_pkl' =>$request->periode_pkl,
        'perusahaan' =>$request->perusahaan,
        'id_pembimbing' =>$request->id_pembimbing,
        'divisi' =>$request->divisi,
        'upload_file' =>$request->upload_file('upload_file')
        ]);

        return redirect('/laporansiswa');
    }


    public function nilai()
    {
        return view ('siswa.nilai');
    }

}