<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class AdminController extends Controller
{
    public function admin()
    {
        return view ('admin.dashboard');
    }

    public function profiel()
    {
        return view ('admin.profiel');
    }

    public function suratpengantar()
    {
        return view ('admin.suratpengantar');
    }

    public function suratpermohonan()
    {
        return view ('admin.suratpermohonan');
    }

    public function suratpermohonanpeserta()
    {
        return view ('admin.suratpermohonanpeserta');
    }

    public function suratpermohonankelompok()
    {
        return view ('admin.suratpermohonankelompok');
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