@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Input Data Siswa</b></h1>
        </div>
    </div>
    </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Input Siswa</a>
            <a href="https://docs.google.com/spreadsheets/d/1ulrfX110zRo0pmlBAVH5MoQBgW_1vfUD/edit?usp=sharing&ouid=103546124539139681987&rtpof=true&sd=true" class="btn btn-warning">Download Template Excel</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Peserta</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Kompetensi Keahlian</th>
                        <th colspan="5">Aksi</th>
                    </tr>

                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nisn }}</td>
                        <td>{{ $item->kompetensi_keahlian }}</td>
                        <td>

                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" data-toggle="modal" data-target="#exampleModalToggle" class="btn btn-warning">Edit</button>

                          {{-- <form action="/delete/{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger">Delete</button>
                          </form>
                          
                          <button type="button" class="btn btn-warning">Edit</button> --}}
                        </td>
                
                    </tr>
                    @endforeach

                </thead>
                <tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama Peserta</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nis</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nisn</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Kompetensi Keahlian</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  
    s
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- input --}}
          <form action="{{ URL::to('/importsiswa') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Selesai</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </form>
      </div>
    </div>
  </div>


@endsection