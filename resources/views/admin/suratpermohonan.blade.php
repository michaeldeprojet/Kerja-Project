@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Surat Permohonan</b></h1>
        </div>
    </div>
    </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="{{ url('/suratpermohonanpeserta/create') }}" class="btn btn-success" src="../img/vector.png">Surat Permohonan Siswa</a>
            <a href="/suratpermohonankelompok" class="btn btn-success ml-3" style="color:white;" src="../img/vector.png">Surat Permohonan Lebih Dari 1 Siswa</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Pembimbing PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                </thead>

                @foreach ($surat as $item)
                <tr>
                    <td>{{ $item->datasiswa->nama}}</td>
                    <td>{{ $item->jurusans->jurusan }}</td>
                    <td>{{ $item->datapembimbing->nama }}</td>
                    <td>{{ $item->alamat_perusahaan}}</td>
                    <td>
                        <a class="btn btn-danger" onclick="confirm ('Yakin Ingin Menghapus Data ini?')" href="{{  url('complaints/delete/'.$item->id) }}"> Delete</a>
                    </td>
                </tr>
                
            @endforeach

                <tbody>
            </table>
        </div>
    </div>


@endsection