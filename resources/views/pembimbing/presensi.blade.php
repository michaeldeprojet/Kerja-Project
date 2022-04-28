@extends('layouts.pembimbing')

@section('content-header')

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Kehadiran Peserta PKL</b></h1>
        </div>
      </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Tanggal</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Tempat PKL</th>
                        <th>Keterangan</th>
                        <th>Alasan</th>
                        <th colspan="7">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                <tr style="background-color:white;">
                  <td scope="row">{{ $data->datasiswa->nama}}</td>
                  <td>{{ date('d-F-Y', strtotime ($data->tgl_pkl)) }}</td>
                  <td>{{ $data->kompetensi}}</td>
                  <td>{{ $data->nama_perusahaan }}</td>
                  <td>{{ $data->keterangan }}</td>
                  <td>{{ $data->alasan}}</td>
                  <td>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
