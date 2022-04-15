<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\SuratPkl;

class KakomliController extends Controller
{
    public function kakomli()
    {
        return view ('kakomli.dashboard');
    }

    public function profile()
    {
        return view ('kakomli.profile');
    }

    public function kompetensi()
    {
        return view ('kakomli.kompetensi');
    }

    public function surat()
    {
        $datas = SuratPkl::all();
        return view ('kakomli.surat',compact('datas'));
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

    public function tambahsertifikat()
    {
        return view ('kakomli.tambahsertifikat');
    }

}