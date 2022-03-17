@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 style="color:#34365B; margin-left:10%;"><b>Jurnal Mingguan</b></h1>
    </div>
  </div>

  <a href="{{ route('Jurnalpkl.create') }}">
    <button type="button" class="btn btn-success ml-5 mt-3 col-2">
      Tambah Jurnal</button>
    </a>
  
  <!-- table -->
  <table class="table mt-4 col-11 text-center" style="margin-left:4%;">
    <tr style="background-color:#595CB4; color:white;">
      <td scope="col">Nama Peserta</td>
      <td scope="col">NIS</td>
      <td scope="col">Tanggal</td>
      <td scope="col">Pembimbing</td>
      <td scope="col">Nama Perusahaan</td>
      <td scope="col">Divisi</td>
      <td scope="col">Minggu Ke-</td>
      <td scope="col">Kegiatan</td>
      <td scope="col">Hasil</td>

    </tr>

  <tbody>
     @foreach ( $dtjurnal as $data )
    <tr style="background-color:white;">
      <td scope="row">{{ $data->datasiswa->nama}}</td>
      <td>{{ $data->nis}}</td>
      <td>{{ date('d-F-Y', strtotime ($data->tgl_pkl)) }}</td>
      <td>{{ $data->datapembimbing->nama}}</td>
      <td>{{ $data->nama_perusahaan }}</td>
      <td>{{ $data->divisi}}</td>
      <td>{{ $data->minggu }}</td>
      <td>{{ $data->kegiatan}}</td>
      <td>{{ $data->hasil}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection 