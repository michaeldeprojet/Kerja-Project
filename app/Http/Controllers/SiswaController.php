<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class SiswaController extends Controller
{
    public function siswa()
    {
        return view ('siswa.dashboard');
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
        return view ('siswa.jurnalpkl');
    }
    public function jurnal()
    {
        return view ('siswa.jurnal');
    }
    public function lapor()
    {
        return view ('siswa.laporan');
    }
    public function nilai()
    {
        return view ('siswa.nilai');
    }

}