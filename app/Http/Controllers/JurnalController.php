<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurnalPkl;
use App\Models\DataSiswa;
use App\Models\DataPembimbing;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtjurnal = JurnalPkl::orderBy("tgl_pkl","DESC")->get();
        return view('siswa.JurnalPkl', compact('dtjurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurnal1 = DataSiswa::all();
        $jurnal2 = DataPembimbing::all();
        return view('siswa.jurnal', compact('jurnal1', 'jurnal2'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        JurnalPkl::create([
            'id_siswa' => $request->id_siswa,
            'nis' => $request->nis,
            'tgl_pkl' => $request->tgl_pkl,
            'id_pembimbing' => $request->id_pembimbing,
            'nama_perusahaan' => $request->nama_perusahaan,
            'divisi' => $request->divisi,
            'minggu' => $request->minggu,
            'kegiatan' => $request->kegiatan,
            'hasil' => $request->hasil,
           
        ]);

        return redirect('Jurnalpkl');

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
