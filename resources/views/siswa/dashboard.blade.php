@extends('layouts.siswa')

@section('content-header')

  <div class="container-fluid">
  <h1 style="color:#34365B; margin-left:8%;"><b> Dashboard</b></h1>
  </div>

  <div class="d-flex justify-content-center mt-4">

      <div class="card text-dark bg-light mb-3 col-3" style="max-width: 18rem; margin-right:20px;">
        <div class="card-header text-center">Jumlah Seluruh Siswa</div>
          <div class="card-body">
            <p class="card-text text-center">1.500</p>
          </div>
      </div>

      <div class="card text-dark bg-light mb-3 col-3" style="max-width: 18rem; margin-right:20px;">
        <div class="card-header text-center">Jumlah Siswa PKL</div>
          <div class="card-body">
            <p class="card-text text-center">500</p>
          </div>
      </div>

      <div class="card text-dark bg-light mb-3 col-3" style="max-width: 18rem;">
        <div class="card-header text-center">Jumlah Siswa Belum PKL</div>
          <div class="card-body">
            <p class="card-text text-center">1000</p>
          </div>
      </div>
  </div>

@endsection