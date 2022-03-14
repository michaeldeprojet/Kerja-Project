<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\models\Pegawai;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataSiswaImport;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=DataSiswa::all();
        return view ('admin.datasiswa')->with('siswa', $siswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $DataSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $DataSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSiswa $DataSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $DataSiswa,$id)
    {
        DataSiswa::destroy($id);
        return redirect('/datasiswa')->with('succses', 'Berhasil Dihapus');
    }

    public function importsiswa(Request $request)
    {
        Excel::import(new DataSiswaImport, $request->file('file'));
        return redirect()->back();
    }
}
