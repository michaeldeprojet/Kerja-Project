@extends('layouts.kakomli')

@section('content-header')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 style="color:#34365B; margin-left:10%;"><b> PenentuanPKL</b></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>

    {{-- @dump($datas) --}}

    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="/tambahpenentuan" class="btn btn-success" src="../img/vector.png">Tambah peserta</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Periode</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Pembimbing PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->siswa->nama }}</td>
                            <td>{{ $data->periode }}</td>
                            <td>{{ $data->siswa->jurusans->jurusan }}</td>
                            <td>{{ $data->pembimbing->nama}}</td>
                            <td>{{ $data->tempat_pkl}}</td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm ('Yakin Ingin Menghapus Data Ini?')" href = "{{ url('/penentuan/delete/'.$data->id) }} ">Delete</a>
                            </td>                
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection