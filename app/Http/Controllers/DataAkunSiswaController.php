<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use App\Imports\DataSiswaImport;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;

class DataAkunSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::select('*')
        ->where('role', 'SISWA')
        ->get();
        // $siswas = DataSiswa::all();
        $jurusan = Jurusan::all();
        return view ('admin.dataakunsiswa',compact('siswa','jurusan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $siswas = DataSiswa::all();
        return view('admin.createakunsiswa', compact('siswas','jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DataSiswa::updateOrCreate(['id' => $request->id],
        // ['nama' => $request->name, 'nis' => $request->nis, 'nisn' => $request->nisn, 'jurusan_id' => $request->jurusan_id]);
        // return response()->json();
        $siswa = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'jurusan_id' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
            'username' => 'required',
        ]);
        $siswa['role'] = 'SISWA';
        $password = request('password'); // get the value of password field
        // $user = Hash::make($password);
        $siswa['password'] = Hash::make($password);
        User::create($siswa);

        return redirect()->route('dataakunsiswa.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(User $User,$id )
    {
        $data = User::find($id);
        return response()->json($data);
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
    public function update(Request $request, User $User)
    {
        User::updateOrCreate(['id' => $request->id],
        ['nama' => $request->nama, 'nis' => $request->nis, 'nisn' => $request->nisn, 'jurusan_id' => $request->jurusan_id]);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $DataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $DataSiswa,$id)
    {
        User::destroy($id);
        return redirect('/dataakunsiswa')->with('succses', 'Berhasil Dihapus');
    }

    public function importsiswa(Request $request)
    {
        Excel::import(new DataSiswaImport, $request->file('file'));
        return redirect()->back();
    }

    public function downloadFile()
    {
    	$filePath = public_path("template/Template Data Siswa.xlsx");
    	$headers = ['Content-Type: application/xlsx'];
        $fileName = 'Template Data Siswa.xlsx';
        
        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName, $headers);
        } else {
            echo('File not found.');
        }

    	
    }
}
