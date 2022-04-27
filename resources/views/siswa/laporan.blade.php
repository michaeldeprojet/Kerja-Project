@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2 ml-5">
    <div class="col-sm-6">
      <h1 style="color:#34365B;"><b>Input Laporan PKL<b></h1>
    </div>
  </div>
<div>

  <form action="{{ route('laporansiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row mx-5 mt-3">
            <div class="form-group col-8">
              <label for="position-option">Nama Peserta Didik</label>
              <select class="form-control" name="id_siswa" id="id" onchange="cek_db()">
                <option selected>Nama Peserta </option>
                  @foreach ($data1 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
                <label for="nis" class="form-label">NIS</label>
                <input type="" class="form-control" id="nis" readonly>
            </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-4">
              <label for="judul" class="form-label">Periode</label>
              <input type="year" name="periode_pkl" class="form-control" placeholder="">
          </div>

          <div class="form-group col-8">
              <label for="kelas" class="form-label">Nama Perusahaan</label>
              <input type="text" name="perusahaan" class="form-control" placeholder="Nama Perusahaan...">
          </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-6">
            <label for="position-option">Pembimbing</label>
            <select class="form-control" name="id_pembimbing">
              <option selected>Pembimbing</option>
                @foreach ($data2 as $item)
                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group col-6">
              <label for="kelas" class="form-label">Divisi Kerja</label>
              <input type="text" name="divisi" class="form-control" placeholder="Divisi...">
          </div>
        </div>

        <div class="col-3 mt-3">
          <div class="mt-4" style="width: 270px; margin-left:10px">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="padding-left: 10%">Upload File Laporan PKL (.docx / .pdf )</li>
              <form action="{{ URL::to('/laporansiswa') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group" style="margin-left:33px; margin-top:20px">
                  <input type="file" name="upload_file" required>
              </div>
            </ul>
          </div>
        </div>

        <div style="margin-left:33%; margin-top:-7.2%;">
            <p style="margin-left:9%;">Download Contoh Laporan PKL</p>
            <button type="button" style="margin-left:4%; background-color:#F89A0E; color:white;"class="btn col-5">Download</button>
        </div>

        <div class="alert alert-primary col-9" role="alert" style="background-color:#595CB4; color:white; margin-left:4%; margin-top:3%;">
            Note : Laporan berbentuk Docx / PDF
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:0px padding:20px">
          <button class="btn btn-secondary me-md-2" type="button" style="margin-right: 20px; width:190px">View</button>
          <button class="btn btn-success" type="submit" style="width:190px">Submit</button>
        </div>
  </form>

  <script>
    function cek_db(){
      var id = $("#id").val();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        type : "GET",
        url : '/datasiswas/'+id,
        success: function (newdata){
          var data = newdata;
          $('#nis').val(data.nis);
        }
      });
    }
</script>

@endsection
