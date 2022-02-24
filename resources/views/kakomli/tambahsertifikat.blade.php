@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <h2 style="color:#34365B; padding-left: 7px; font-family: Poppins; font-weight: bold;">Cetak Sertifikat</h2>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3">
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">Nama Perusahaan</label>
              <input type="email" class="form-control" id="Namapesertapkl">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Nama Peserta PKL</label>
              <input type="password" class="form-control" id="kompetensikeahlian">
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">Posisi Sebagai ( Contoh : Fullstuck Developer )</label>
                <input type="email" class="form-control" id="namapembimbingpkl">
              </div>
              <div class="col-md-6 mt-3">
                <label for="inputPassword4" class="form-label">Tempat Tanggal Lahir</label>
                <input type="password" class="form-control" id="periodepkl">
              </div>

            <div class="col-md-3 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Awal Pelaksanaan</label>
              <input type="text" class="form-control" id="tempatpkl">
            </div>

            <div class="col-md-3 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Penyelesaian PKL</label>
              <input type="text" class="form-control" id="tempatpkl">
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Sertifikat Dibuat</label>
              <input type="text" class="form-control" id="tempatpkl">
            </div>

            <div class="col-md-12 mt-4">
                <label for="uploadfile" class="form-label">Upload file Logo Perusahaan ( .png )</label>
                <button type="submit" class="btn btn-secondary" style="width: 190px; margin-left:20px">upload</button>
              </div>

              <div class="col-md-12 mt-4">
                <label for="uploadfile" class="form-label">Upload file Tanda Tangan ( .png )</label>
                <button type="submit" class="btn btn-secondary" style="width: 190px; margin-left:20px">upload</button>
              </div>

            <div class="col-6 mt-4">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
          </form>
    </div>

@endsection