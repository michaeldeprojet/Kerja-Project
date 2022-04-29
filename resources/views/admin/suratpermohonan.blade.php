@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Surat Permohonan</b></h1>
        </div>
    </div>
    </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="/suratpermohonanpeserta" class="btn btn-success" src="../img/vector.png">Surat Permohonan Siswa</a>
            <a href="/suratpermohonankelompok" class="btn btn-success ml-3" style="color:white;" src="../img/vector.png">Surat Permohonan Lebih Dari 1 Siswa</a>
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
                <tr>
                    <th> <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">Learn More</a></th>
                    <th>Kompetensi Keahlian</th>
                    <th>Pembimbing PKL</th>
                    <th>Tempat PKL</th>
                    <th>Aksi</th>
                </tr>
                    {{-- @foreach($datas as $d)
                        <tr>
                            <td>{{$d->siswa->nama}}</td>
                            <td>{{$d->siswa->jurusans->jurusan}}</td>
                            <td>{{$d->penjabat}}</td>
                            <td>{{$d->perusahaan}}</td>
                            <td>
                                <form action="{{url('generate-pdf')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="no_surat" value="{{ $d->no_surat }}">
                                    <button type="submit" class="btn btn-secondary" src="../img/vector.png">Cetak PDF</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

     <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nama Peserta PKL</h5>
        </div>

        <div class="modal-body">
            <table class="mt-4 table table-bordered" style="text-align: center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Michael D E</a></th>
                    <th>11907272</th>
                    <th>00392384</th>
                </tr>
                {{-- @foreach($datas as $d)
                        <tr>
                            <td>{{$d->siswa->nama}}</td>
                            <td>{{$d->siswa->jurusans->jurusan}}</td>
                            <td>{{$d->penjabat}}</td>
                            <td>{{$d->perusahaan}}</td>
                            <td>
                                <form action="{{url('generate-pdf')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="no_surat" value="{{ $d->no_surat }}">
                                    <button type="submit" class="btn btn-secondary" src="../img/vector.png">Cetak PDF</button>
                                </form>
                            </td>
                        </tr>
                @endforeach --}}
            </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" herf="/suratpermohonanadmin">Back</button>
        </div>
      </form>
      </div>
    </div>
  </div>


@endsection
