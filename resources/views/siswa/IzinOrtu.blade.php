@extends('layouts.siswa')

@section('content-header')

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b>Surat Izin Orang Tua</b></h1>
        </div>
      </div>
    </div>
  <div class="container">
    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3 container">
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">No xxx/xxx/xxx/xxxx (028/SMK/XII/2022)</label>
              <input type="" class="form-control" id="NoSurat">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Tanggal</label>
              <input type="date" class="form-control" id="tanggal">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Pejabat</label>
              <input type="text" class="form-control" id="NamaPejabat">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Institusi</label>
              <input type="" class="form-control" id="NamaInstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Institusi Dunia Kerja</label>
              <input type="text" class="form-control" id="AlamatInstusi     ">
            </div>
          </form>

          <form class="row g-3">
            <div class="col-3 mt-3">
              <div class="mt-4" style="width: 270px; margin-left:10px">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="padding-left: 10%">Upload File Peserta PKL (.Excel )</li>
                  <li class="list-group-item"><button type="button" class="btn btn-secondary col-lg-7" style="margin-left:25%">Upload</button></li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 mt-3">
              <div class="mt-4" style="width: 270px; margin-left:40px">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="padding-left: 10%">Download Template File Peserta</li>
                  <li class="list-group-item"><button type="button" class="btn btn-warning col-lg-7" style="margin-left:25%">Download</button></li>
                </ul>
              </div>
            </div>

            {{-- <label for="" class="pl-5 pt-3" style="">Upload file peserta PKL (.excel)</label>
            <label for="" class="pt-3 ml-5" styel="margin-left:150px;">Download Template File Peserta PKL</label>

            <a href="/suratpermohonanadmin" class="btn btn-success mt-5 col-md-3" style="margin-left: -540px;" src="../img/vector.png">Upload</a>
            <a href="" class="btn btn-warning mt-5 col-md-3 " style="color:white; margin-left:100px;" src="../img/vector.png">Download</a>

            <div>
                <a href="" class="btn btn-danger mt-5 col-15 " style="margin-left:31px;" src="">Note : Table Excel berisi nama, kompetesni keahlian dan kelas </a>
            </div>  

            <div style="margin-top:100px; margin-left: 420px;">
                <a href="/suratpermohonanadmin" class="btn btn-secondary " src="../img/vector.png">View</a>
                <a href="" class="btn btn-success ml-3 " style="color:white;" src="../img/vector.png">Submit</a>
            </div> --}}

        </form>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:0px padding:20px">
          <button class="btn btn-secondary me-md-2" type="button" style="margin-right: 20px; width:190px">View</button>
          <button class="btn btn-success" type="button" style="width:190px">Submit</button>
        </div>
    </div>

    </div>
        

@endsection