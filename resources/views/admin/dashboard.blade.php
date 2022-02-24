@extends('layouts.admin')

@section('content-header')

  <div class="container-fluid">
      <h3 style="color:#34365B; padding-left:6px; font-family: Poppins; font-weight: bold;">Dashboard</h3>
  </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>NIS</th>
                        <th>Periode</th>
                        <th>Kompetensi Keahlian</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>

@endsection