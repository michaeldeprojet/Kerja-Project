<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\SuratPkl;
use App\Models\DataPembimbing;
use App\Models\DataSiswa;
use App\Models\Penentuan;
use App\Models\Sertifikat;
use App\Models\User;

class KakomliController extends Controller
{
    public function kakomli()
    {
        $keseluruhan = DataSiswa::all()->count();
        $siswaPKL = Penentuan::all()->count();
        $belumPKL = $keseluruhan-$siswaPKL;
        return view ('kakomli.dashboard', [
            'keseluruhan' => $keseluruhan,
            'siswaPKL' => $siswaPKL,
            'belumPKL' => $belumPKL
        ]);
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
        $penentuan1 = User::select('*')
        ->where('role', 'SISWA')
        ->get();
        // $penentuan1 = DataSiswa::all();
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
        $datas = Sertifikat::all();
        return view ('kakomli.sertifikat',compact('datas'));
    }

    public function tambahsertifikat()
    {
        $sertifikat1 = DataSiswa::all();
        $sertifikat2 = DataPembimbing::all();
        return view('kakomli.tambahsertifikat', compact('sertifikat1', 'sertifikat2'));
    }

    public function storesertifikat(Request $request)
    {
        Sertifikat::create([
        'id_siswa' => $request->id_siswa,
        'nama_perusahaan' => $request->perusahaan,
        'tgl_awal_pkl' => $request->tgl_awal,
        'tgl_akhir_pkl' => $request->tgl_akhir,
        'tgl_sert_dibuat' => $request->tgl_sertif,
        'tanggal_lahir' => $request->tanggal_lahir,
        'tempat_lahir' => $request->tempat_lahir,
        'divisi' => $request->divisi,
        'upload_logo' => $request->logo,
        'upload_ttd' => $request->ttd
        ]);
        return redirect ('/cetaksertifikatkakomli');
    }

    public function destroysertifikat($id)
    {
        $datas = Sertifikat::find($id);
        $datas->delete();

        return redirect ('/cetaksertifikatkakomli');
    }
    
    public function getDataSertifikat($id){
        $datas = Sertifikat::where('id',$id)->first()->load('datasiswa');
        return response()->json($datas);
    }
}