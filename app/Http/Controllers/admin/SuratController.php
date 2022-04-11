<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DataPembimbing;
use App\Models\DataSiswa;
use App\Models\Jurusan;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::all();
        return view ('admin.suratpermohonan', compact('surat'));
    }

    public function create()
    {
        return view ('admin.suratpermohonanpeserta');   
        // $surat1 = DataSiswa::all();
        // $surat2 = Jurusan::all();
        // $surat3 = DataPembimbing::all();
        // return view('admin.suratpermohonanpeserta', compact('surat1', 'surat2', 'surat3'));
    }

    public function store(Request $request)
    {
        User::Create([
            'id_siswa' => $request-> id_siswa,
            'no_surat' => $request-> no_surat,
            'penjabat' => $request-> penjabat,
            'tgl_surat' => $request-> tgl_surat,
            'perusahaan' => $request-> perusahaan,
            'alamat_perusahaan' => $request-> alamat_perusahaan,
            'id_pembimbing' => $request-> id_pembimbing,
            'jurusan_id' => $request-> jurusan_id,
        ]);

        return redirect('/suratpermohonanadmin');
    }
}
