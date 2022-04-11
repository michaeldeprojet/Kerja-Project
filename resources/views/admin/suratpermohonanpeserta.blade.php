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
        <form class="row g-3" action="{{ url('/suratpermohonanpeserta/store') }}" method="POST">
          @csrf
            <div class="col-md-6 mt-3">
              <label for="inputEmail4" class="form-label">No xxx/xxx/xxx/xxxx (028/SMK/XII/2022</label>
              <input type="number" class="form-control" name="no_surat" id="NoSurat">
            </div>
            <div class="col-md-6 mt-3">
              <label for="inputPassword4" class="form-label">Tanggal</label>
              <input type="date" class="form-control" name="tgl_surat" id="tanggal">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Pejabat</label>
              <input type="text" class="form-control" name="penjabat" id="NamaPejabat">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Instusi</label>
              <input type="text" class="form-control" name="perusahaan" id="NamaInstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Instusi Dunia Kerja</label>
              <input type="text" class="form-control" name="alamat_perusahaan" id="AlamatInstusi     ">
            </div>

            <div class="col-12 mt-3">
              <label for="position-option">Nama Peserta PKL</label>
              <select class="form-control" name="id_siswa">
                <option selected>-- Nama Peserta PKL -- </option>
                  @foreach ($surat1 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="col-12 mt-3">
              <label for="position-option">Nama Pembimbing PKL</label>
              <select class="form-control" name="id_pembimbing">
                <option selected>-- Nama Pembimbing PKL -- </option>
                  @foreach ($surat3 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="col-12 mt-3">
              <label for="position-option">Kompetensi Keahlian</label>
              <select class="form-control" name="jurusan_id">
                <option selected>-- Kompetensi Keahlian -- </option>
                  @foreach ($surat2 as $item)
                    <option value="{{ $item->id }}">{{ $item->jurusan }}</option>
                  @endforeach
              </select>
            </div>

                <a href="/suratpermohonanadmin" class="btn btn-secondary mt-4 col-md-1 ml-2" src="../img/vector.png">View</a>
                <button class="btn btn-success  ml-3 mt-4 col-md-1" style="color:white;" src="../img/vector.png">Submit</a>
          </form>
    </div>
        

@endsection