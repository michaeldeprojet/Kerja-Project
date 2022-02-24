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
    public function profil()
    {
        return view ('siswa.profil');
    }
    public function izin()
    {
        return view ('siswa.IzinOrtu');
    }
    public function hadir()
    {
        return view ('siswa.kehadiran');
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