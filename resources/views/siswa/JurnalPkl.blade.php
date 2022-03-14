@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 style="color:#34365B; margin-left:10%;"><b>Jurnal Mingguan</b></h1>
    </div>
  </div>

  <a href="/Jurnalpkl/create">
  <img src="../img/folder.png" style="width: 20px; height:20px ">
  <button style="margin-left:2%;" type="button" class="btn btn-success mt-3 col-2">
    Jurnal</button>
  </a>
  
  <!-- table -->
  <table class="table mt-4 col-11 text-center" style="margin-left:4%;">
    <tr style="background-color:#595CB4; color:white;">
      <td scope="col">Nama Peserta</td>
<<<<<<< HEAD
      <td scope="col">NIS</td>
=======
      <td scope="col">Nis</td>
      <td scope="col">Pembimbing</td>
>>>>>>> d3064abfd53e8332a9e7ec3351c1e86308a7ae03
      <td scope="col">Tanggal</td>
      <td scope="col">Pembimbing</td>
      <td scope="col">Nama Perusahaan</td>
      <td scope="col">Divisi</td>
      <td scope="col">Minggu Ke-</td>
      <td scope="col">Kegiatan</td>
      <td scope="col">Hasil</td>

    </tr>

  <tbody>
<<<<<<< HEAD
    @foreach ($datas as $data)

    <tr style="background-color:white;">
      <td>{{ $data->nama }}</td>
      <td>{{ $data->nis }}</td>
      <td>{{ $data->tgl_pkl }}</td>
      <td>{{ $data->pembimbing }}</td>
      <td>{{ $data->nama_perusahaan }}</td>
      <td>{{ $data->divisi }}</td>
      <td>{{ $data->minggu }}</td>
      <td>{{ $data->kegiatan }}</td>
      <td>{{ $data->hasil }}</td>
    </tr>
    @endforeach

    
=======
     @foreach ( $dtjurnal as $data )
    <tr style="background-color:white;">
      <td scope="row">{{$data->nama_siswa}}</td>
      <td>{{$data->nis}}</td>
      <td>{{$data->pembimbing}}</td>
      <td>{{$data->tgl_pkl}}</td>
      <td>{{$data->minggu}}</td>
    </tr>
    @endforeach
>>>>>>> d3064abfd53e8332a9e7ec3351c1e86308a7ae03
  </tbody>
</table>
</div>

@endsection 