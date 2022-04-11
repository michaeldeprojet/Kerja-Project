<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Nilai;
use App\Models\DataSiswa;
use App\Models\DataPembimbing;
use App\Models\Jurusan;


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
        return view ('pembimbing.presensi');
    }

    public function nilai()
    {
        return view ('pembimbing.inputnilai');
    }

    public function tambahpenilaian()
    {
        $nama = DataSiswa::all();
        $jurusan = Jurusan::all();
        return view ('pembimbing.tambahpenilaian', compact('nama','jurusan'));
    }
    public function laporan()
    {
        return view ('pembimbing.rekaplaporan');
    }

}