@extends('layouts.siswa')

@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 style="color:#34365B; margin-left:10%;"><b> Profil</b></h1>
            </div>
        </div>
    </div>

    <div class="card mb-3 justify-center" style="max-width: 1000px; margin-left: 20px; height:330px; margin-top:2%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-fluid rounded-start" style="padding-top: 70px; margin-left: 100px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <button type="button" class="btn btn-warning float-right" id="edit">Edit</button>
                    <div class="col-6">
                        <h4>{{ Auth::user()->role }}</h4>
                        <div class="row">
                            <div class="col-6 mb-1">Nama Lengkap</div>
                            <div class="col-6">: {{ Auth::user()->nama }}</div>
                            <div class="col-6 mb-1">Jenis Kelamin</div>
                            <div class="col-6">: {{ Auth::user()->jenis_kelamin}}</div>
                            <div class="col-6 mb-1">NIS</div>
                            <div class="col-6">: {{ Auth::user()->nis }}</div>
                            <div class="col-6 mb-1">NISN</div>
                            <div class="col-6">: {{ Auth::user()->nisn }}</div>
                            <div class="col-6 mb-1">NO HP</div>
                            <div class="col-6">: {{ Auth::user()->no_hp }}</div>
                            <div class="col-6 mb-1">Email</div>
                            <div class="col-6">: {{ Auth::user()->email}}</div>
                            <div class="col-6 mb-1">Tempat Lahir </div>
                            <div class="col-6">: {{ Auth::user()->tempat_lahir}}</div>
                            <div class="col-6 mb-1">Tanggal Lahir </div>
                            <div class="col-6">: {{ Auth::user()->tanggal_lahir}}</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <div class="card col-md-8" style="margin-left: 20px; max-width: 1000px;">
        <div class="card-body">
            <h5 class="card-title" style="padding-left:80px;">Kompetensi Keahlian  : {{ Auth::user()->jurusans->jurusan }}</h5>
        </div>
    </div>

@endsection 