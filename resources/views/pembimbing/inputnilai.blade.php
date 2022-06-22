@extends('layouts.pembimbing')

@section('content-header')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 style="color:#34365B; margin-left:10%;"><b> Penilaian Ahkir PKL</b></h1>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-3">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>



    <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="/tambahpenilaian" class="btn btn-success" src="../img/vector.png">Input Nilai</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Pembimbing PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="6">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scores as $score)
                    <tr>
                        <td><a target="_blank" href="{{asset('/uploads/pdf/nilai_pkl/'.$score->upload_file)}}">{{ $score->student->nama }}</a></td>
                        <td>{{ 'kelas' }}</td>
                        <td>{{ $score->student->jurusans->jurusan }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $score->nama_industri }}</td>
                        <td>{{ $score->nilai_akhir }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
