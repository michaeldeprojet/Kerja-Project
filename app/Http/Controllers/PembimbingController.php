<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Presensi;
use App\Models\DataSiswa;
use App\Models\Penentuan;

class PembimbingController extends Controller
{
    public function pembimbing()
    {
        $keseluruhan = DataSiswa::all()->count();
        $siswaPKL = Penentuan::all()->count();
        $belumPKL = $keseluruhan-$siswaPKL;
        return view ('pembimbing.dashboard', [
            'keseluruhan' => $keseluruhan,
            'siswaPKL' => $siswaPKL,
            'belumPKL' => $belumPKL
        ]);
    }

    public function profile()
    {
        return view ('pembimbing.profile');
    }

    public function kompetensi()
    {
        return view ('pembimbing.kompetensi');
    }

    public function siswa()
    {
        $data = Penentuan::all();
        return view ('pembimbing.siswa', compact('data') );
    }

    public function presensi()
    {
        $datas= Presensi::orderBy("tgl_pkl","DESC")->get();
        return view('pembimbing.presensi', compact('datas'));
    }

    public function nilai()
    {
        return view ('pembimbing.inputnilai');
    }

    public function tambahpenilaian()
    {
        return view ('pembimbing.tambahpenilaian');
    }
    public function laporan()
    {
        return view ('pembimbing.rekaplaporan');
    }

}