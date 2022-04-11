@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6 ml-5">
    <h1 style="color:#34365B;"><b> Kehadiran Siswa PKL</b></h1>
    </div>
  </div>

  <!-- table -->
  <table class="table mt-4 col-11 text-center" style="margin-left:4%;">
    <tr style="background-color:#595CB4; color:white;">
      <td scope="col">Nama Peserta</td>
      <td scope="col">NIS</td>
      <td scope="col">Tanggal</td>
      <td scope="col">Tempat PKL</td>
      <td scope="col">Kompetensi Keahlian</td>
      <td scope="col">Keterangan</td>
      <td scope="col">Alasan</td>
    </tr>
  <tbody>
    @foreach($datas as $data)
    <tr style="background-color:white;">
      <td scope="row">{{ $data->datasiswa->nama}}</td>
      <td>{{ $data->nis}}</td>
      <td>{{ date('d-F-Y', strtotime ($data->tgl_pkl)) }}</td>
      <td>{{ $data->nama_perusahaan }}</td>
      <td>{{ $data->jurusans->jurusan}}</td>
      <td>{{ $data->keterangan }}</td>
      <td>{{ $data->alasan}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection 