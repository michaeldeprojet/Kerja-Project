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
      <td scope="col">Nis</td>
      <td scope="col">Pembimbing</td>
      <td scope="col">Tanggal</td>
      <td scope="col">Minggu Ke-</td>
    </tr>
  <tbody>
     @foreach ( $dtjurnal as $data )
    <tr style="background-color:white;">
      <td scope="row">{{$data->nama_siswa}}</td>
      <td>{{$data->nis}}</td>
      <td>{{$data->pembimbing}}</td>
      <td>{{$data->tgl_pkl}}</td>
      <td>{{$data->minggu}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection 