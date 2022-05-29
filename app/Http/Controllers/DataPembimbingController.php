<?php

namespace App\Http\Controllers;

use App\Models\DataPembimbing;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataPembimbingImport;
use App\Models\Jurusan;

class DataPembimbingController extends Controller
{
    public function index()
    {
        $pembimbing= DataPembimbing::all();
        $jurusan = Jurusan::all();
        return view ('admin.datapembimbing',compact('pembimbing','jurusan'));
    }

    public function create()
    {
        # code...
    }

    public function store(Request $request)
    {
        DataPembimbing::updateOrCreate(['id' => $request->id],
        ['nama' => $request->name, 'no_hp' => $request->no_hp, 'alamat' => $request->alamat, 'email'=> $request->email, 'tempat_lahir' => $request->tempat_lahir, 'tanggal_lahir'=> strtotime($request->tanggal_lahir), 'jurusan_id' => $request->jurusan_id]);
        return response()->json();
    }

    public function show(DataPembimbing $DataPembimbing,$id )
    {
        $data = DataPembimbing::find($id);
        return response()->json($data);
    }

    public function edit(DataPembimbing $DataPembimbing)
    {
        //
    }

    public function update(Request $request, DataPembimbing $DataPembimbing)
    {
        //
    }

    public function destroy(DataPembimbing $DataPembimbing,$id)
    {
        DataPembimbing::destroy($id);
        return redirect('/datapembimbing')->with('succses', 'Berhasil Dihapus');
    }

    public function importpembimbing(Request $request)
    {
        Excel::import(new DataPembimbingImport, $request->file('file'));
        return redirect()->back();
    }

    public function downloadFile()
    {
    	$filePath = public_path("template/Template Data Pembimbing.xlsx");
    	$headers = ['Content-Type: application/xlsx'];
        $fileName = 'Template Data Pembimbing.xlsx';
        
        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName, $headers);
        } else {
            echo('File not found.');
        }

    	
    }
}
