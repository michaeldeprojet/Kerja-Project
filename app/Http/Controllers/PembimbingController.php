<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Presensi;

class PembimbingController extends Controller
{
    public function pembimbing()
    {
        return view ('pembimbing.dashboard');
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
        return view ('pembimbing.siswa');
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