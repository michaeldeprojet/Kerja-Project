@extends('layouts.admin')

@section('content-header')

  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Surat Permohonan 1 Peserta PKL</b></h1>
      </div>
    </div>
  </div>

    <div class="card mt-3 p-4 shadow-sm">
        <form action="{{url('/simpanPermohonanPeserta')}}" method="post" class="row g-3">
          @csrf
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">No xxx/xxx/xxx/xxxx (028/SMK/XII/2022 )</label>
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
              <label for="inputAddress" class="form-label">Nama Instusi</label>
              <input type="" class="form-control" name="namainstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Instusi Dunia Kerja</label>
              <input type="text" class="form-control" name="alamatinstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Peserta PKL</label>
              <select class="form-control" aria-label="Default select example" name="id_peserta" id="id" onchange="cek_db()">
                <option disabled selected style="display: none">----Pilih Siswa-----</option>
                @foreach($siswas as $s)
                  <option value="{{$s->id}}">{{$s->nama}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">NIS</label>
                <input type="" class="form-control" id="nis" readonly>
              </div>
              <div class="col-md-6 mt-3">
                <label for="inputPassword4" class="form-label">Kelas/Jurusan</label>
                <input type="" class="form-control" id="jurusan" readonly>
              </div>

                <a href="/suratpermohonanadmin" class="btn btn-secondary mt-4 col-md-1 ml-2" src="../img/vector.png">View</a>
                <button class="btn btn-success  ml-3 mt-4 col-md-1" style="color:white;" src="../img/vector.png">Submit</button>
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
          url : '/siswa/'+id,
        success: function (newdata){
          var data = newdata;
          $('#nis').val(data.nis);
          $('#jurusan').val(data.jurusans.jurusan);
        }
        });
    }
    </script>
@endsection