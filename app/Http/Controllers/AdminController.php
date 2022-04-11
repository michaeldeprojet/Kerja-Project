<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PegawaiImport;
use App\Models\DataPembimbing;
use App\Models\DataSiswa;
use App\Models\Jurusan;
use App\Models\Pegawai;
use App\Models\Surat;

class AdminController extends Controller
{
    public function admin()
    {
        return view ('admin.dashboard');
    }

    public function inputsiswa()
    {
        return view ('admin.inputsiswa');
    }

    public function profile()
    {
        return view ('admin.profile');
    }

    public function suratpengantar()
    {
        return view ('admin.suratpengantar');
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