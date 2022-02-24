@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 style="color:#34365B; margin-left:8%;"><b>Daftar Hadir</b></h1>
    </div>
      <div class="col-sm-6">
      </div>

      <!-- Nama Peserta -->
      <p class="mt-4" style="margin-left:5%;">Nama Peserta</p>
      <!-- NIS -->
      <p style="margin-left:36.8%;" class="mt-4">Nis</p>

  </div>
  <div>
        <input style="margin-left:4%;" class="form-control col-5" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:49.8%; margin-top:-3.6%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
</div>
        <!-- Tanggal dan Perusahaan -->

        <p class="mt-4" style="margin-left:4%;">Tanggal / waktu</p>
        <p style="margin-left:33%; margin-top:-3.5%;">Nama Perusahaan</p>
        <input style="margin-left:4%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
        <input style="margin-left:33%; margin-top:-3.6%;" class="form-control col-5" type="text" placeholder="No" aria-label="default input example">
        
        <!-- Nama Pejabat -->
        <p class="mt-3" style="margin-left:4%;">Nama Pejabat</p>
        <input style="margin-left:4%; width:753px;" class="form-control" type="text"  aria-label="default input example">
       
        <!-- Keterangan -->
        <p class="mt-3" style="margin-left:4%;">Keterangan</p>
          <div class="form-check" style="margin-left:4%;">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Hadir
              </label>
          </div>
          <div class="form-check" style="margin-left:19%; margin-top:-2.3%;">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
               Izin
              </label>
          </div>
          <div class="form-check" style="margin-left:34%; margin-top:-2.3%;">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
               Sakit
              </label>
          </div>

          <!-- Alasan -->
          <p class="mt-4" style="margin-left:4%;">Alasan ( diisi jika keterangan Izin atau Sakit )</p>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="margin-left:4%; width:753px;"></textarea>
          </div>
        
          <!-- Upload File -->
          <div style="margin-top:3%;">
            <p style="margin-left:6%;">Upload File Peserta PKL (.Excel )</p>
            <button type="button" style="margin-left:4%; background-color:#34365B; color:white;"class="btn col-3">Upload</button>
          </div>

          <!-- Download File -->
          <div style="margin-left:33%; margin-top:-7.2%;">
              <p style="margin-left:6%;">Download Template File Peserta PKL</p>
              <button type="button" style="margin-left:4%; background-color:#F89A0E; color:white;"class="btn col-5">Download</button>
          </div>

          <!-- Submit -->
          <button type="button" class="btn btn-success" style="margin-top:6%; margin-left:4%;">Submit</button>


@endsection