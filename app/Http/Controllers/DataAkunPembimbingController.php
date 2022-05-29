<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataPembimbing;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use App\Imports\DataPembimbingImport;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;

class DataAkunPembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::select('*')
        ->where('role', 'PEMBIMBING')
        ->get();
        // $siswas = DataPembimbing::all();
        $jurusan = Jurusan::all();
        return view ('admin.dataakunpembimbing',compact('user','jurusan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $pembimbing = DataPembimbing::all();
        return view('admin.createakunpembimbing', compact('pembimbing','jurusan'));
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
        $user = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jurusan_id' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'password' => 'required',
            'username' => 'required',
        ]);
        $user['role'] = 'PEMBIMBING';
        $password = request('password'); // get the value of password field
        // $user = Hash::make($password);
        $user['password'] = Hash::make($password);
        User::create($user);

        return redirect()->route('dataakunpembimbing.index')->with('succes','Data Berhasil di Input');
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
     * @param  \App\Models\DataPembimbing  $DataPembimbing
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPembimbing $DataPembimbing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPembimbing  $DataPembimbing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        User::updateOrCreate(['id' => $request->id],
        ['nama' => $request->nama, 'no_hp' => $request->no_hp, 'username' => $request->username, 'email' => $request->email, 'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir, 'jurusan_id' => $request->jurusan_id]);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPembimbing  $DataPembimbing
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPembimbing $DataPembimbing,$id)
    {
        User::destroy($id);
        return redirect('/dataakunpembimbing')->with('succses', 'Berhasil Dihapus');
    }

    public function importsiswa(Request $request)
    {
        Excel::import(new DataPembimbingImport, $request->file('file'));
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
