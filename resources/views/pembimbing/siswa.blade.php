@extends('layouts.pembimbing')

@section('content-header')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 style="color:#34365B; margin-left:10%;"><b> Daftar Siswa</b></h1>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-3">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>

    
    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
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
                        @foreach($data as $datas)
                        <tr style="background-color:white;">
                        <td scope="row">{{ $datas->siswa->nama}}</td>
                        <td>{{ $datas->periode }}</td>
                        <td>{{ $datas->siswa->jurusans->jurusan}}</td>
                        <td>{{ $datas->pembimbing->nama }}</td>
                        <td>{{ $datas->tempat_pkl}}</td>
                        <td>
                            <a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            <a href="" class="btn btn-warning">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

@endsection