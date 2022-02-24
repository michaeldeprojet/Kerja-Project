@extends('layouts.admin')

@section('content-header')

  <div class="container-fluid">
      <h3 style="color:#34365B; padding-left:6px; font-family: Poppins; font-weight: bold;">Surat Permohonan</h3>
  </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="/suratpermohonanpeserta" class="btn btn-success" src="../img/vector.png">Surat Permohonan Siswa</a>
            <a href="/suratpermohonankelompok" class="btn btn-warning ml-3" style="color:white;" src="../img/vector.png">Surat Permohonan Lebih Dari 1 Siswa</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Pembimbing PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>


@endsection