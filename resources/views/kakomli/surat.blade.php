@extends('layouts.kakomli')

@section('content-header')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-7">
                    <h1 style="color:#34365B; margin-left:10%;"><b> Data Surat Permohonan</b></h1>
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

    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th >Nama Peserta</th>
                        <th>Jurusan/Keahlian</th>
                        <th>Pembimbing</th>
                        <th>Tempat PKL</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $d)
                        <tr>
                            <td>{{$d->siswa->nama}}</td>
                            <td>{{$d->siswa->jurusans->jurusan}}</td>
                            <td>{{$d->penjabat}}</td>
                            <td>{{$d->perusahaan}}</td>
                            <td>
                                <a href="{{url('generate-pdf/'.$d->id)}}" class="btn btn-secondary" src="../img/vector.png">Cetak PDF</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection