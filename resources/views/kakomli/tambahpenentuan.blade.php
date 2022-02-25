@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <h2 style="color:#34365B; padding-left: 7px; font-family: Poppins; font-weight: bold;">Penentuan PKL</h2>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3">
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">Nama Peserta PKL</label>
              <input type="email" class="form-control" id="Namapesertapkl">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Kompetensi Keahlian</label>
              <input type="password" class="form-control" id="kompetensikeahlian">
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">Nama Pembimbing PKL</label>
                <input type="email" class="form-control" id="namapembimbingpkl">
              </div>
              <div class="col-md-6 mt-3">
                <label for="inputPassword4" class="form-label">Periode PKL</label>
                <input type="password" class="form-control" id="periodepkl">
              </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Tempat PKL</label>
              <input type="text" class="form-control" id="tempatpkl">
            </div>

            <form class="row g-3">
              <div class="col-3 mt-3">
                <div class="mt-4" style="width: 270px; margin-left:10px">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="padding-left: 10%">Upload File Surat Permohonan</li>
                    <li class="list-group-item"><button type="button" class="btn btn-secondary" style="margin-left:25%">Upload</button></li>
                  </ul>
                </div>
              </div>

            
          </form>

          <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:0px padding:20px">
            <button class="btn btn-success" type="button" style="width:190px">Submit</button>
          </div>
    </div>

@endsection