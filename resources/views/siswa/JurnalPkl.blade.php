@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 style="color:#34365B; margin-left:8%;"><b>Jurnal PKL</b></h1>
    </div>
      <div class="col-sm-6">
        <ol style="margin-right:10%;" class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">profile</li>
        </ol>
      </div>
      <p class="mt-4" style="margin-left:5%;">Nama Peserta</p>
      <p style="margin-left:35%;" class="mt-4">Nis</p>
  </div>
  <div>
        <input style="margin-left:4%;" class="form-control col-5" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:48%; margin-top:-3.6%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
</div>
      <p class="mt-4" style="margin-left:4%;">Tanggal / Waktu</p>
      <p style="margin-left:40%; margin-top:-3.5%;">Nama Perusahaan</p>

       <input style="margin-left:4%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:40%; margin-top:-3.6%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">

        <p class="mt-4" style="margin-left:4%;">Pembimbing</p>
      <p style="margin-left:32%; margin-top:-3.5%;">Divisi Kerja</p>
      <p style="margin-left:60%; margin-top:-3.5%;">Minggu Ke-</p>

       <input style="margin-left:4%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:32%; margin-top:-3.6%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:60%; margin-top:-3.6%; width:147px;" class="form-control" type="text" placeholder="No" aria-label="default input example">
    
         <!-- Alasan -->
         <p class="mt-4" style="margin-left:4%;">Kegiatan yang dilakukan</p>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="margin-left:4%; width:753px;"></textarea>
          </div>

                 <!-- Alasan -->
         <p class="mt-4" style="margin-left:4%;">Hasil yang Dicapai</p>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="margin-left:4%; width:753px;"></textarea>
          </div>
        <div style="margin-top:3%; margin-left:4%;">
          <button type="button" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-warning">Reset</button>
        </div>

@endsection