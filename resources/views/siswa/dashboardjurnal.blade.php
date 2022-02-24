@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 style="color:#34365B; margin-left:8%;"><b>Jurnal Mingguan</b></h1>
    </div>
  </div>

  <a href="/Jurnalpkl">
  <img src="../img/folder.png" style="width: 20px; height:20px ">
  <button style="margin-left:2%;" type="button" class="btn btn-success mt-3 col-2">
    Jurnal</button>
  </a>
    
  <!-- table -->
  <table class="table mt-4 col-11 text-center" style="margin-left:4%;">
    <tr style="background-color:#595CB4; color:white;">
      <td scope="col">Nama Peserta</td>
      <td scope="col">Nis</td>
      <td scope="col">Kompetisi Keahlian</td>
      <td scope="col">Pembimbing</td>
      <td scope="col">Tanggal</td>
      <td scope="col">Minggu Ke-</td>
    </tr>
  <tbody>
    <tr style="background-color:white;">
      <th scope="row">Mark</th>
      <td>11907097</td>
      <td>Multimedia</td>
      <td>Pak Joko</td>
      <td>12 Februari 2022</td>
      <td>3</td>
    </tr>
  </tbody>
</table>
</div>

@endsection