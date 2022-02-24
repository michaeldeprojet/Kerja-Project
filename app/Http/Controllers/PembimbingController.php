<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

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

}