@extends('layouts.kakomli')

@section('content-header')

  <div class="container-fluid">
      <h3 style="color:#34365B; padding-left:6px; font-family: Poppins; font-weight: bold;">Dashboard</h3>
  </div>

  <div class="d-flex justify-content-center">

      <div class="card text-dark bg-light mb-3" style="max-width: 18rem; margin-right:20px;">
        <div class="card-header text-center">Jumlah Seluruh Siswa</div>
          <div class="card-body">
            <p class="card-text text-center">1.500</p>
          </div>
      </div>

      <div class="card text-dark bg-light mb-3" style="max-width: 18rem; margin-right:20px;">
        <div class="card-header text-center">Jumlah Siswa PKL</div>
          <div class="card-body">
            <p class="card-text text-center">500</p>
          </div>
      </div>

      <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header text-center">Jumlah Siswa Belum PKL</div>
          <div class="card-body">
            <p class="card-text text-center">1000</p>
          </div>
      </div>
  </div>

@endsection