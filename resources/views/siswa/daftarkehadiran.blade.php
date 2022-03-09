@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 style="color:#34365B; margin-left:10%;"><b> Dashboard</b></h1>
    </div>
  </div>

  <a href="/Presensisiswa">
  <img src="../img/folder.png" style="width: 20px; height:20px ">
  <button style="margin-left:2%;" type="button" class="btn btn-success mt-3 col-2">
    Kehadiran</button>
  </a>

  <!-- table -->
  <table class="table mt-4 col-11 text-center" style="margin-left:4%;">
    <tr style="background-color:#595CB4; color:white;">
      <td scope="col">Nama Peserta</td>
      <td scope="col">Tanggal</td>
      <td scope="col">Kompetisi Keahlian</td>
      <td scope="col">Tempat PKL</td>
      <td scope="col">Keterangan</td>
      <td scope="col">Alasan</td>
    </tr>
  <tbody>
    @foreach($datas as $data)
    <tr style="background-color:white;">
      <td scope="row">{{ $data->datasiswa->nama}}</td>
      <td>{{ $data->tgl_pkl}}</td>
      <td>{{ $data->datasiswa->kompetensi_keahlian}}</td>
      <td>{{ $data->nama_perusahaan }}</td>
      <td>{{ $data->keterangan }}</td>
      <td>{{ $data->alasan}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection 