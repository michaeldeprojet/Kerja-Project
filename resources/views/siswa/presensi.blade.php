@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2 ml-5">
    <div class="col-sm-6">
      <h1 style="color:#34365B;"><b>Daftar Kehadiran<b></h1>
    </div>
  </div>
<div>

  <form action="{{ route('presensi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row mx-5 mt-3">
            <div class="form-group col-8">
              <label for="position-option">Nama Peserta Didik</label>
              <select class="form-control" name="id_siswa">
                <option selected>Nama Peserta </option>
                  @foreach ($presensi as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
                <label for="kelas" class="form-label">NIS</label>
                <input type="number" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-4">
              <label for="judul" class="form-label">Tanggal / Waktu</label>
              <input type="date" name="tgl_pkl" class="form-control" placeholder="">
          </div>

          <div class="form-group col-8">
              <label for="kelas" class="form-label">Nama Perusahaan</label>
              <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan...">
          </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-12">
              <label for="kelas" class="form-label">Kompetensi Keahlian</label>
              <input type="text" name="kompetensi" class="form-control" placeholder="Kompetensi Keahlian">
          </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-12">
            <label for="keterangan" class="form-label">Keterangan</label>
          </div>
          <div class="form-check form-check-inline col-4 ml-2">
            <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio1" value="Hadir">
            <label class="form-check-label" for="inlineRadio1">Hadir</label>
          </div>
          <div class="form-check form-check-inline col-4">
            <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio2" value="Izin">
            <label class="form-check-label" for="inlineRadio2">Izin</label>
          </div>
          <div class="form-check form-check-inline col-3">
            <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio3" value="Sakit">
            <label class="form-check-label" for="inlineRadio3">Sakit</label>
          </div>

        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-12">
              <label for="kelas" class="form-label">Alasan (Diisi Jika Sakit atau Izin)</label>
              <input type="text" name="alasan" class="form-control" placeholder="Alasan">
          </div>
        </div>

        <div class="form-group mx-5">
          <button type="submit" class="btn btn-success col-2 ml-2">Submit</button>
        </div>
  </form>
@endsection
