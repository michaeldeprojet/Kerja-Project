@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 style="color:#34365B; margin-left:10%;"><b> Izin Orang Tua</b></h1>
    </div>
      <div class="col-sm-6">
      </div>
          <p class="mt-4" style="margin-left:5%;"><b> No xxx/xxx/xxx/xxxx </b> <i>( 028/SMK/XII/2022 )</i></p>
          <p style="margin-left:17.7%;" class="mt-3">tanggal</p>
  </div>
  <div>
        <input style="margin-left:4%;" class="form-control col-5" type="text" aria-label="default input example">
        <input style="margin-left:48%; margin-top:-3.6%;" class="form-control col-3" type="text" aria-label="default input example">
</div>
        <!-- Nama Pejabat -->
        <p class="mt-3" style="margin-left:4%;">Nama Pejabat</p>
        <input style="margin-left:4%;" class="form-control col-9" type="text"  aria-label="default input example">

        <!-- Nama Institusi -->
        <p class="mt-3" style="margin-left:4%;">Nama Institusi</p>
        <input style="margin-left:4%;" class="form-control col-9" type="text" aria-label="default input example">

        <!-- Alamat Institusi -->
        <p class="mt-3" style="margin-left:4%;">Alamat Institusi Dunia Kerja</p>
        <input style="margin-left:4%;" class="form-control col-9" type="text" aria-label="default input example">

        <!-- Upload File -->
        <p class="mt-4" style="margin-left:6%;">Upload File Peserta PKL (.Excel )</p>
        <button type="button" style="margin-left:4%; background-color:#34365B; color:white;"class="btn col-3">Upload</button>
        
        <!-- Download Template -->
        <div style="margin-left:33%; margin-top:-9.4%;">
            <p class="mt-4" style="margin-left:6%;">Download Template File Peserta PKL</p>
            <button type="button" style="margin-left:4%; background-color:#F89A0E; color:white;"class="btn col-5">Download</button>
        </div>

        <div class="mt-5 d-grid gap-2">
          <button class="btn btn-success" type="button" style="width:190px; margin-left:40px">Submit</button>
        </div>
</div>


@endsection 