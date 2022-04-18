@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 style="color:#34365B; margin-left:10%;"><b> Cetak Sertifikat</b></h1>
            </div>
        </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3" action="{{url('tambahsertifikat/store')}}" method="POST">
          @csrf
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">Nama Perusahaan</label>
              <input type="text" class="form-control" id="Namapesertapkl" name="perusahaan">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Nama Peserta</label>
              <select class="form-control" aria-label="Default select example" name="id_siswa" id="id" onchange="cek_db()">
                <option disabled selected>Nama Peserta</option>
                  @foreach ($sertifikat1 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">Posisi Sebagai ( Contoh : Fullstack Developer )</label>
                <input type="text" class="form-control" id="namapembimbingpkl" name="divisi">
              </div>
              <div class="col-md-3 mt-3">
                <label for="inputPassword4" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" readonly>
              </div>
              <div class="col-md-3 mt-3">
                <label for="inputPassword4" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" readonly>
              </div>
            <div class="col-md-3 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Awal Pelaksanaan</label>
              <input type="date" class="form-control" id="tempatpkl" name="tgl_awal">
            </div>

            <div class="col-md-3 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Penyelesaian PKL</label>
              <input type="date" class="form-control" id="tempatpkl" name="tgl_akhir">
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputAddress" class="form-label">Tanggal Sertifikat Dibuat</label>
              <input type="date" class="form-control" id="tgl_sertif" name="tgl_sertif">
            </div>

            <form class="row g-3">
              <div class="col-3 mt-3">
                <div class="mt-4" style="width: 300px; margin-left:10px">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="padding-left: 10%">Upload file Logo Perusahaan ( .png )</li>
                    <form action="{{ URL::to('/suratpermohonankelompok') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="margin-left:33px; margin-top:20px">
                        <input type="file" name="logo" required>
                    </div>
                  </ul>
                </div>
              </div>
  
              <div class="col-md-4 mt-3">
                <div class="mt-4" style="width: 270px; margin-left:90px">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="padding-left: 10%">Upload file Tanda Tangan ( .png )</li>
                    <form action="{{ URL::to('/suratpermohonankelompok') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="margin-left:33px; margin-top:20px">
                        <input type="file" name="ttd" required>
                    </div>
                  </ul>
                </div>
              </div>
         <div class="justify-content-md-end mt-5 ml-5" style="margin-right:0px padding:20px">
                <button class="btn btn-success" type="submit" style="width:190px">Submit</button>
              </div>
          </form>
  
    </div>
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
          url : '/sertifikat/'+id,
        success: function (newdata){
          var data = newdata;
          $('#tempat_lahir').val(data.datasiswa.tempat_lahir);
          $('#tanggal_lahir').val(data.datasiswa.tanggal_lahir);
        }
        });
    }
    </script>

@endsection