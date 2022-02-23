<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class KakomliController extends Controller
{
    public function kakomli()
    {
        return view ('kakomli.dashboard');
    }

    public function profiel()
    {
        return view ('kakomli.profiel');
    }

    public function kompetensi()
    {
        return view ('kakomli.kompetensi');
    }

    public function surat()
    {
        return view ('kakomli.surat');
    }

    public function penentuan()
    {
        return view ('kakomli.penentuan');
    }

    public function tambahpenentuan()
    {
        return view ('kakomli.tambahpenentuan');
    }


    public function nilai()
    {
        return view ('kakomli.rekapnilai');
    }

    public function laporan()
    {
        return view ('kakomli.rekaplaporan');
    }

    public function sertifikat()
    {
        return view ('kakomli.sertifikat');
    }
}