@extends('layouts.kakomli')

@section('content-header')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 style="color:#34365B; margin-left:10%;"><b> Profil</b></h1>
            </div>
        </div>
    </div>

    
    <div class="card mb-3 justify-center" style="max-width: 1000px; margin-left: 20px; height:330px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-fluid rounded-start" style="padding-top: 70px; margin-left: 100px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title bold" style="font-family: Poppins; font-weight: bold; padding-top:30px;">Kakomli</h5>
                    <p class="card-text" style="padding-top:10px; padding-left:25px;">Jenis Kelamin              :</p>
                    <p class="card-text" style="padding-left:25px;">Tempat/Tanggal Lahir       :</p>
                    <p class="card-text"style="padding-left:25px;">No Handphone               :</p>
                    <p class="card-text"style="padding-left:25px;">Email                      :</p>
                    <p class="card-text"style="padding-left:25px;">Alamat                     :</p>
                </div>
            </div>
    </div>
    </div>

    <div class="card col-md-8" style="margin-left: 20px; max-width: 1000px;">
        <div class="card-body">
            <h5 class="card-title" style="padding-left:80px;">Kompetensi Keahlian  :</h5>
        </div>
    </div>

@endsection