@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 style="color:#34365B; margin-left:10%;"><b>Jurnal PKL</b></h1>
    </div>
      <div class="col-sm-6">
      </div>
  </div>
<div>
    <form action="/Jurnalpkl/store" method="POST">
      @csrf
      <div class="form-group">
        <input name="nama" type="text" id="nama" class="form-control col-5 mt-4" placeholder="Nama Siswa" style="margin-left:5%;">
      </div>
      <div class="form-group">
        <input name="nis" type="text" id="nama" class="form-control col-5" placeholder="NIS" style="margin-left:50%; margin-top:-5%;">
      </div>
      <div class="form-group">
        <input name="tgl" type="date" id="tgl" class="form-control col-5"  style="margin-left:5%;">
      </div>
      <div class="form-group">
        <input name="perusahaan" type="text" id="perusahaan" class="form-control col-5" placeholder="Nama Perusahaan" style="margin-left:50%; margin-top:-5%;">
      </div>
      <div class="form-group">
        <input name="pembimbing" type="text" id="pembimbing" class="form-control col-3 mt-2" placeholder="Nama Pembimbing" style="margin-left:5%;">
      </div>
      <div class="form-group">
        <input name="divisi" type="text" id="divisi" class="form-control col-4" placeholder="Divisi" style="margin-left:32%; margin-top:-5%;">
      </div>
      <div class="form-group">
        <input name="minggu" type="text" id="minggu" class="form-control col-3" placeholder="Minggu ke-" style="margin-left:67%; margin-top:-5%;">
      </div>
      <div class="form-group">
        <textarea name="kegiatan" id="kegiatabn" class="form-control col-10" placeholder="kegiatan yang dilakukan" style="margin-left:5%;"></textarea>
      </div>
      <div class="form-group">
        <textarea name="hasil" id="hasil" class="form-control col-10" placeholder="hasil" style="margin-left:5%;"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success col-2" style="margin-left:5%;">Submit</button>
      </div>
</form>

@endsection 