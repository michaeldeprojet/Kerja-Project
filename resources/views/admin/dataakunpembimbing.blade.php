@extends('layouts.admin')

@section('content-header')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Input Akun Pembimbing</b></h1>
        </div>
    </div>
    </div>

  <div class="card mt-3 p-4 shadow-sm">
        <div class="table-responsive">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Input Siswa</a>
            <a href="{{ route('dataakunpembimbing.create') }}" class="btn btn-primary btn-sm float-right" title="Tambah User"><i class="fas fa-plus"></i></a>

            <a href="/file-download" class="btn btn-warning">Download Template Excel</a>
            <table class="mt-4 table table-bordered table-md table-hover bg-white text-center">
                <thead>
                    <tr style="background-color:#595CB4; color:white;">
                        <th>Nama Pembimbing</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>role</th>
                        <th>Kompetensi Keahlian</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->username}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->role}}</td>
                        <td>{{ $item->jurusans->jurusan }}</td>
                        <td>
                          <form action="{{ url('dataakunpembimbing/'.$item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                          <button type="button" class="btn btn-warning" id="edit" data-id="{{$item->id}}">Edit</button>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" id="edit-data" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Akun Pembimbing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form-data-siswa">
            @csrf  
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama Pembimbing</label>
                <input type="hidden" class="form-control" id="id" name="id">
                <input type="text" class="form-control" id="nama" name="name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">no_hp</label>
                <input type="text" class="form-control" id="no_hp"  name="no_hp">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">email</label>
                <input type="text" class="form-control" id="email"  name="email">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Kompetensi Keahlian</label>
                <select class="form-control" aria-label="Default select example" name="jurusan_id" id="jurusan_id">
                  <option disabled selected style="display: none">----Pilih Jurusan-----</option>

                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveBtn">Submit</button>
          </div>
        </div>
      </div>
    </div>

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

<script  type="text/javascript">
$(document).on('click','#edit',function(){
    var id = $(this).data("id");
    $.get("{{ route('datasiswa.index') }}" +'/' + id, function (data) {
      $('#id').val(data.id);
      $('#nama').val(data.nama);
      $('#no_hp').val(data.no_hp);
      $('#email').val(data.email);
      $('#jurusan_id').val(data.jurusan_id);
      $('#edit-data').modal('show');
    })
  });

  $("#saveBtn").click(function (e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    })
    e.preventDefault();

    $.ajax({
      data: $('#form-data-siswa').serialize(),
      url: "{{ route('datasiswa.store') }}",
      type: "POST",
      dataType: 'json',
      success: function (data) {
        $('#form-data-siswa').trigger("reset");
        $('#edit-data').modal('hide');
        location.reload();
        swal({
          title: 'Data Tersimpan!',
          type: 'success',
          showConfirmButton: false,
          timer: 1500,
        })
      },
      error: function (data) {
        console.log('Error:', data);
        swal({
          title: 'Data Tidak Tersimpan!',
          type: 'error',
          showConfirmButton: false,
          timer: 1500,
        })
      }
    });
  });
</script>
@endsection
