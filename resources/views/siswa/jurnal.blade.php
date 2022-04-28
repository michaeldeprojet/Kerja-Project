@extends('layouts.siswa')

@section('content-header')

<div class="container-fluid">
  <div class="row mb-2 ml-5">
    <div class="col-sm-6">
      <h1 style="color:#34365B;"><b>Jurnal Mingguan<b></h1>
    </div>
  </div>
<div>
  
  <form action="{{ route('Jurnalpkl.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row mx-5 mt-3">
            <div class="form-group col-8">
              <label for="position-option">Nama Peserta Didik</label>
              <select class="form-control" name="id_siswa">
                <option selected>Nama Peserta </option>
                  @foreach ($jurnal1 as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group col-4">
                <label for="kelas" class="form-label">NIS</label>
                <input type="number" class="form-control" id="nis" readonly>
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
          <div class="form-group col-5">
            <label for="position-option">Pembimbing</label>
            <select class="form-control" name="id_pembimbing">
              <option selected>Pembimbing</option>
                @foreach ($jurnal2 as $item)
                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group col-5">
              <label for="kelas" class="form-label">Divisi Kerja</label>
              <input type="text" name="divisi" class="form-control" placeholder="Divisi...">
          </div>

          <div class="form-group col-2">
            <label for="kelas" class="form-label">Minggu ke</label>
            <input type="number" name="minggu" class="form-control" placeholder="Minggu Ke..">
        </div>
      </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-12">
              <label for="kelas" class="form-label">Kegiatan Yang dilakukan</label>
              <textarea type="text" name="kegiatan" class="form-control" placeholder="kegiatan..."></textarea>
          </div>
        </div>

        <div class="row mx-5 mt-3">
          <div class="form-group col-12">
              <label for="kelas" class="form-label">Hasil Yang Dicapai</label>
              <textarea type="text" name="hasil" class="form-control" placeholder="hasil...."></textarea>
          </div>
        </div>

        <div class="form-group mx-5">
          <button type="submit" class="btn btn-success col-2 ml-2">Submit</button>
        </div>
  </form>
@endsection 