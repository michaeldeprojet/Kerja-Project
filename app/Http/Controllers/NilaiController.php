<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\DataSiswa;
use App\Models\DataPembimbing;
use App\Models\Jurusan;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Nilai = Nilai::all();
        return view('pembimbing.inputpenilaian', compact('Nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama = DataSiswa::all();
        $jurusan = Jurusan::all();
        return view('pemibimbing.tambahpenilaian', compact('nama','jurusan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = DataSiswa::all();
        // dd($request->all());
        Nilai::create([
            'id'=> $request->id,
            'id_siswa'=> $request->id_siswa,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'jurusan_id' => $request->jurusan_id,
            'nama_pt'=> $request->nama_pt,
            'nama_industri' => $request->nama_industri,
            'instruktur' => $request->instruktur,
            'nilai_laporan' => $request->nilai_laporan,
            'nilai_aspek_sikap' => $request->nilai_aspek_sikap,
            'nilai_aspek_pengetahuan' => $request->nilai_aspek_pengetahuan,
            'nilai_aspek_keterampilan' => $request->nilai_aspek_keterampilan,
            'nilai_rata_rata' => $request->nilai_rata_rata,
            'nilai_akhir' => $request->nilai_akhir,
            'upload_file' => $request->upload_file,
        ]);

        return redirect('Nilai');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
