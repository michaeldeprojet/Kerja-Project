<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function siswa()
    {
        return view ('siswa.nilai');
    }
}
