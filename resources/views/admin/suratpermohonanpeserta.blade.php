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
        <form class="row g-3">
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
              <label for="inputAddress" class="form-label">Nama Instusi</label>
              <input type="" class="form-control" id="NamaInstusi">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Alamat Instusi Dunia Kerja</label>
              <input type="text" class="form-control" id="AlamatInstusi     ">
            </div>

            <div class="col-12 mt-3">
              <label for="inputAddress" class="form-label">Nama Peserta PKL</label>
              {{-- <input type="" class="form-control" id="NamaPeserta"> --}}
              <input type="text" class="form-control" id="NamaPeserta" list="siswa" />
                <datalist id="siswa">
                @foreach ( $data as $d )
                    <option>{{ $d->nama }}</option>
                @endforeach
                </datalist>
            </div>

            <div class="col-md-6 mt-3">
                <label for="inputEmail4" class="form-label">NIS</label>
                <input type="" class="form-control" id="nis">
              </div>
              <div class="col-md-6 mt-3">
                <label for="inputPassword4" class="form-label">Kelas/Jurusan</label>
                <input type="" class="form-control" id="jurusan">
              </div>

                <a href="/suratpermohonanadmin" class="btn btn-secondary mt-4 col-md-1 ml-2" src="../img/vector.png">View</a>
                <a href="" class="btn btn-success  ml-3 mt-4 col-md-1" style="color:white;" src="../img/vector.png">Submit</a>
          </form>
    </div>


@endsection

