@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 style="color:#34365B; margin-left:10%;"><b> Cetak Sertifikat</b></h1>
            </div>
        </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="/tambahsertifikat" class="btn btn-success" src="../img/vector.png">Tambah Sertifikat</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Perusahaan</th>
                        <th>Kompetensi Keahlian</th>
                        <th>divisi</th>
                        <th colspan="6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $d)
                        <tr>
                            <td>{{$d->datasiswa->nama}}</td>
                            <td>{{$d->nama_perusahaan}}</td>
                            <td>{{$d->datasiswa->jurusans->jurusan}}</td>
                            <td>{{$d->divisi}}</td>
                            <td>
                                <a href="{{url('generate-pdf/'.$d->id)}}" class="btn btn-secondary" src="../img/vector.png">Cetak</a>
                                <a class="btn btn-danger" onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')" href = "{{ url('/tambahsertifikat/delete/'.$d->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>

@endsection