@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 style="color:#34365B; margin-left:10%;"><b> Penentuan PKL</b></h1>
            </div>
        </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form class="row g-3" action="{{url('/tambahpenentuan/store')}}" method="POST">
          @csrf
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">Nama Peserta</label>
              <select class="form-control" aria-label="Default select example" name="id_siswa" id="id" onchange="cek_db()">
                <option disabled selected>Nama Peserta</option>
                  @foreach ($penentuan1 as $item)
                    <option value="{{ $item->siswa->id }}">{{ $item->siswa->nama }}</option>
                  @endforeach
              </select>
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Kompetensi Keahlian</label>
              <input type="" class="form-control" id="jurusan" readonly>
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">Nama Pembimbing</label>
                <select class="form-control" name="id_pembimbing">
                <option selected>Nama Pembimbing </option>
                  @foreach ($penentuan2 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
              </div>
              <div class="col-md-6 mt-3">
                <label for="inputPassword4" class="form-label">Periode</label>
                <input type="number" class="form-control" id="periodepkl" name="periode">
              </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Tempat PKL</label>
              <input type="" class="form-control" id="tempat_pkl" name="tempat_pkl" readonly>
            </div>


              <div class="col-3 mt-3">
                <div class="mt-4" style="width: 270px; margin-left:10px">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="padding-left: 10%">Upload File Surat Permohonan</li>
                    <form action="{{ URL::to('/suratpermohonankelompok') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="margin-left:33px; margin-top:20px">
                        <input type="file" name="permohonan" required>
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
          url : '/nama/'+id,
        success: function (newdata){
          var data = newdata;
          $('#jurusan').val(data.data.jurusans.jurusan);
          $('#tempat_pkl').val(data.suratPkl.perusahaan);
        }
        });
    }
    </script>

@endsection