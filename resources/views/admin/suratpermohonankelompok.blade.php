@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
      <h3 style="color:#34365B; padding-left:6px; font-family: Poppins; font-weight: bold;">Surat Permohonan Kelompok PKL</h3>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3">
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">No xxx/xxx/xxx/xxxx (028/SMK/XII/2022</label>
              <input type="" class="form-control" id="NoSurat">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Tanggal</label>
              <input type="" class="form-control" id="tanggal">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Pejabat</label>
              <input type="text" class="form-control" id="NamaPejabat">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Instusi</label>
              <input type="" class="form-control" id="NamaInstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Instusi Dunia Kerja</label>
              <input type="text" class="form-control" id="AlamatInstusi     ">
            </div>
    
            <label for="" class="pl-5 pt-3" style="">Upload file peserta PKL (.excel)</label>
            <label for="" class="pt-3 ml-5" styel="padding-left:150px;">Download Template File Peserta PKL</label>

            <a href="/suratpermohonanadmin" class="btn btn-success mt-5 col-md-3" style="margin-left: -540px;" src="../img/vector.png">Upload</a>
            <a href="" class="btn btn-warning mt-5 col-md-3 " style="color:white; margin-left:100px;" src="../img/vector.png">Download</a>

            <div>
                <a href="" class="btn btn-danger mt-5 col-15 " style="margin-left:31px;" src="">Note : Table Excel berisi nama, kompetesni keahlian dan kelas </a>
            </div>  

            <div style="margin-top:100px; margin-left: 420px;">
                <a href="/suratpermohonanadmin" class="btn btn-success " src="../img/vector.png">View</a>
                <a href="" class="btn btn-warning ml-3 " style="color:white;" src="../img/vector.png">Submit</a>
            </div>
        </form>
    </div>
        

@endsection