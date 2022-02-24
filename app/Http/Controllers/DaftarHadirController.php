<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarHadirController extends Controller
{
    public function index()
    {
        return view ('siswa.DaftarHadir');

    }
}
