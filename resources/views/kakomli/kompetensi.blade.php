@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <h2 style="color:#34365B; padding-left: 7px; font-family: Poppins; font-weight: bold;">Kompetensi Keahlian</h2>
    </div>

    <div class=""> 
        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Otomatisasi Tata Kelola Perkantoran</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Rekayasa Perangkat Lunak</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Teknik Komputer Jaringan Dan Komunikasi</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Bisnis Daring Dan Pemasaran</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Multimedia</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Tataboga</option>
        </select>

        <select class="form-select col-md-10" style="max-width: 600px; margin-left: 20px; margin-top:15px;">
            <option selected  style="text-align:center;">Perhotelan</option>
        </select>
    </div>

@endsection