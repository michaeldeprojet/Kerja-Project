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
}