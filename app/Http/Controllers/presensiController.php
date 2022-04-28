<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\DataSiswa;

class PresensiController extends Controller
{
    public function getData($id){
        $datas = DataSiswa::where('id',$id)->first()->load('jurusans');
        return response()->json($datas);
    }

    public function index()
    {
        $datas= Presensi::orderBy("tgl_pkl","DESC")->get();
        return view('siswa.daftarkehadiran', compact('datas'));
    }
    
    public function create()
    {
        $presensi = DataSiswa::all();
        return view('siswa.presensi', compact('presensi'));
    }


    public function store(Request $request)
    {
        
        Presensi::create([
            'id_siswa' => $request->id_siswa,
            'nis' => $request->nis,
            'tgl_pkl' => $request->tgl_pkl,
            'nama_perusahaan' => $request->nama_perusahaan,
            'kompetensi' => $request->kompetensi,
            'keterangan' => $request->keterangan,
            'alasan' => $request->alasan,
           
        ]);

        return redirect('presensi');
    }

    public function destroy($id)
    {
        $datas = Presensi::find($id);
        $datas->delete();

        return redirect ('presensi');
    }
}
