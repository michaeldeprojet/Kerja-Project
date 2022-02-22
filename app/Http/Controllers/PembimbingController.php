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
}