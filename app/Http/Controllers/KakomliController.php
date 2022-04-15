<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\SuratPkl;
use App\Models\DataPembimbing;
use App\Models\DataSiswa;
use App\Models\Penentuan;

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
        $datas = Penentuan::all();
        return view ('kakomli.penentuan', compact('datas'));
    }

    public function tambahpenentuan()
    {
        $penentuan1 = DataSiswa::all();
        $penentuan2 = DataPembimbing::all();
        return view('kakomli.tambahpenentuan', compact('penentuan1', 'penentuan2'));
    }

    public function getData($id){
        $datas = DataSiswa::where('id',$id)->first()->load('jurusans');
        return response()->json($datas);
    }
    public function storepenentuan(Request $request)
    {
        Penentuan::create([
        'id_siswa' => $request->id_siswa ,
        'periode' => $request->periode,
        'id_pembimbing' => $request->id_pembimbing,
        'tempat_pkl' => $request->tempat_pkl,
        'upload_permohonan' => $request->permohonan
        ]);
        return redirect ('/penentuanpklkakomli');
    }

    public function destroypenentuan($id)
    {
        $datas = Penentuan::find($id);
        $datas->delete();

        return redirect('/penentuanpklkakomli');
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