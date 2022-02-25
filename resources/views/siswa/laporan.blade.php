@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 style="color:#34365B; margin-left:10%;"><b>Laporan PKL</b></h1>
    </div>
      <div class="col-sm-6">
      </div>
      <p class="mt-4" style="margin-left:5%;">Nama Peserta</p>
      <p style="margin-left:35%;" class="mt-4">Nis</p>
  </div>
        <div>
            <input style="margin-left:4%;" class="form-control col-5" type="text" placeholder="No" aria-label="default input example">
            <input style="margin-left:48%; margin-top:-3.6%;" class="form-control col-3" type="text" placeholder="No" aria-label="default input example">
        </div>
            <p class="mt-4" style="margin-left:4%;">Periode</p>
            <p style="margin-left:40%; margin-top:-3.5%;">Nama Perusahaan</p>

            <input style="margin-left:4%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">
            <input style="margin-left:40%; margin-top:-3.6%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">

            <p class="mt-4" style="margin-left:4%;">Pembimbing</p>
            <p style="margin-left:40%; margin-top:-3.5%;">Divisi Kerja</p>

            <input style="margin-left:4%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">
            <input style="margin-left:40%; margin-top:-3.6%;" class="form-control col-4" type="text" placeholder="No" aria-label="default input example">

            <div style="margin-top:4%;">
                <p style="margin-left:4.5%;">Upload File Laporan PKL (.docx / .pdf )</p>
                <button type="button" style="margin-left:4%; background-color:#34365B; color:white;"class="btn col-3">Upload</button>
            </div>

            <div style="margin-left:33%; margin-top:-7.2%;">
                <p style="margin-left:9%;">Download Contoh Laporan PKL</p>
                <button type="button" style="margin-left:4%; background-color:#F89A0E; color:white;"class="btn col-5">Download</button>
            </div>

            <div class="alert alert-primary col-9" role="alert" style="background-color:#595CB4; color:white; margin-left:4%; margin-top:3%;">
                Note : Laporan berbentuk Docx / PDF
            </div>
@endsection 