@extends('layouts.admin')

@section('content-header')

<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold float-left">Tambah Akun Pembimbing</h5>
                    <a href="{{ route('dataakunsiswa.index') }}" class="btn btn-sm btn-secondary float-right ">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('dataakunpembimbing.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 mt-3">
                            <label for="id" class="form-label">Pilih Pembimbing</label>
                                <select class="form-control" aria-label="Default select example" name="id" id="id" onchange="cek_db()">
                                    <option disabled selected style="display: none">----Pilih Pembimbing-----</option>
                                    @foreach($pembimbing as $s)
                                    <option value="{{$s->id}}">{{$s->nama}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="username" class="form-label">Username Peserta</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
                                @error('username') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="tanggal_lahir" class="form-label">tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        <div class="col-12 mt-3">
                        <label for="recipient-name" class="col-form-label">Kompetensi Keahlian</label>
                            <select class="form-control" aria-label="Default select example" name="jurusan_id" id="jurusan" required>
                            <option disabled selected style="display: none"></option>
                            @foreach($jurusan as $j)
                                <option value="{{$j->id}}">{{$j->jurusan}}</option>
                            @endforeach
                            </select>
                        </div>

                       
                        <div class="col-12 mt-3">
                            <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                                @error('password') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                        </div>

                       
                        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content"></textarea>
                            </div>
                        </div> -->
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-block">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
          url : '/pembimbing/'+id,
        success: function (newdata){
          var data = newdata;
          $('#nama').val(data.nama);
          $('#no_hp').val(data.no_hp);
          $('#alamat').val(data.alamat);
          $('#email').val(data.email);
          $('#tempat_lahir').val(data.tempat_lahir);
          $('#tanggal_lahir').val(data.tanggal_lahir);
          $('#jurusan').val(data.jurusan_id);
        }
        });
    }
    </script>
@endsection
    