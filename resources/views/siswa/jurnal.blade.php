@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6 ml-5">
      <h1 style="color:#34365B;"><b> Jurnal PKL</b></h1>
    </div>
  </div>
</div>

<form action="/" method="POST">
  <div class="row mx-5 my-3">
    <div class="form-group col-8">
        <label for="judul" class="form-label">Nama Peserta</label>
        <input type="text" name="judul" class="form-control" placeholder="">
    </div>

    <div class="form-group col-4">
        <label for="noisbn" class="form-label">NIS</label>
        <input type="text" name="noisbn" class="form-control" placeholder="">
    </div>
  </div>

  <div class="row mx-5 my-3">
    <div class="form-group col-4">
        <label for="judul" class="form-label">Tanggal / Waktu</label>
        <input type="date" name="judul" class="form-control" placeholder="">
    </div>

    <div class="form-group col-8">
        <label for="noisbn" class="form-label">Nama Perusahaan</label>
        <input type="text" name="noisbn" class="form-control" placeholder="">
    </div>
  </div>

  <div class="row mx-5 my-3">
    <div class="form-group col-5">
        <label for="judul" class="form-label">Pembimbing</label>
        <input type="text" name="judul" class="form-control" placeholder="">
    </div>

    <div class="form-group col-5">
        <label for="noisbn" class="form-label">Divisi Kerja</label>
        <input type="text" name="noisbn" class="form-control" placeholder="">
    </div>
    <div class="form-group col-2">
      <label for="noisbn" class="form-label">Minggu ke</label>
      <input type="number" name="noisbn" class="form-control" placeholder="">
    </div>
  </div>

  <div class="row mx-5 my-3">
    <div class="form-group col-12">
        <label for="judul" class="form-label">Kegiatan Yang Dilakukan</label>
        <textarea type="text" name="judul" class="form-control" placeholder=""></textarea>
    </div>
  </div>

  <div class="row mx-5 my-3">
    <div class="form-group col-12">
        <label for="judul" class="form-label">Hasil Yang Dicapai</label>
        <textarea type="text" name="judul" class="form-control" placeholder=""></textarea>
    </div>
  </div>

  <div class="row ml-5 my-3">
    <button type="button" class="btn btn-success col-1 ml-2">Submit</button>
    <button type="button" class="btn btn-warning col-1 ml-3">Reset</button>
    <a href="" class="btn btn-danger col-1 ml-3">Back</a>
  </div>

</form>

@endsection 