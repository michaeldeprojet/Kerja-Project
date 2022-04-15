@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Surat Permohonan Kelompok PKL</b></h1>
        </div>
      </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3" action="{{route('simpan-kelompok')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">No xxx/xxx/xxx/xxxx (028/SMK/XII/2022)</label>
              <input type="" class="form-control" name="nosurat">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Tanggal</label>
              <input type="date" class="form-control" name="tanggal">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Pejabat</label>
              <input type="text" class="form-control" name="namapejabat">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Institusi</label>
              <input type="" class="form-control" name="namainstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Institusi Dunia Kerja</label>
              <input type="text" class="form-control" name="alamatinstusi">
            </div>
            <!-- Upload File -->
            <div class="col-3 mt-3">
              <div class="mt-4" style="width: 270px; margin-left:10px">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="padding-left: 10%">Upload File Peserta PKL (.Excel )</li>
                  <li class="list-group-item">
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Upload</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 mt-3">
              <div class="mt-4" style="width: 270px; margin-left:40px">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="padding-left: 10%">Download Template File Peserta</li>
                  <li class="list-group-item"><button type="button" class="btn btn-warning" style="margin-left:25%">Download</button></li>
                </ul>
              </div>
            </div>     
            <div class="col-md-5 mt-4">
              <div class="alert alert-dark mt-4" role="alert" style="margin-left: 20px">
                Note : Table Excel berisi nama, kompetensi keahlian dan kelas 
              </div>
            </div>
            <label for="" class="pl-5 pt-3" style="">Upload file peserta PKL (.excel)</label>
            <label for="" class="pt-3 ml-5" styel="margin-left:150px;">Download Template File Peserta PKL</label>
            <a href="/suratpermohonanadmin" class="btn btn-success mt-5 col-md-3" style="margin-left: -540px;" src="../img/vector.png">Upload</a>
            <a href="" class="btn btn-warning mt-5 col-md-3 " style="color:white; margin-left:100px;" src="../img/vector.png">Download</a>
            <div>
                <a href="" class="btn btn-danger mt-5 col-15 " style="margin-left:31px;" src="">Note : Table Excel berisi nama, kompetesni keahlian dan kelas </a>
            </div>  
            <div style="margin-top:100px; margin-left: 420px;">
                <a href="/suratpermohonanadmin" class="btn btn-secondary " src="../img/vector.png">View</a>
                <a href="" class="btn btn-success ml-3 " style="color:white;" src="../img/vector.png">Submit</a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:0px padding:20px">
              <button class="btn btn-secondary me-md-2" type="button" style="margin-right: 20px; width:190px">View</button>
              <button type="submit" class="btn btn-success" style="width:190px">Submit</button>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    {{-- input --}}
                    <form action="{{ URL::to('/importdatasiswa') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <input type="file" name="file" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Import</button>
                  </div>
              </div>
        </form>
      </div>
    </div>
    <!-- TutupModal -->
        

@endsection