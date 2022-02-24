@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <h2 style="color:#34365B; padding-left: 7px; font-family: Poppins; font-weight: bold;">Input Nilai</h2>
    </div>

    <div class="mt-3 p-5 shadow-sm">
      <form>

        <div class="row mb-3 mt-0">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Peserta Didik</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Kelas</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Semester</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Kompetensi Keahlian</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Nama industri</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Instruktur</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

      </form>
    </div>

@endsection