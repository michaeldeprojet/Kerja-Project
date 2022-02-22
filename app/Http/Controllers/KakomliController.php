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
}