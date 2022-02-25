@extends('layouts.pembimbing')

@section('content-header')

    <div class="container-fluid">   
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Rekap Laporan PKL</b></h1>
        </div>
      </div>
    </div>

    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>periode</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Pembimbing PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="6">Aksi</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>

@endsection