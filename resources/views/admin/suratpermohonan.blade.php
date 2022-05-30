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
                        <th>Penjabat PKL</th>
                        <th>Tempat PKL</th>
                        <th colspan="5">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($no_surat as $nos)
                    <tr>
                        <td><button class=" btn btn-outline-secondary learn" data-surat="{{$datas->where('no_surat',$nos->no_surat)->first()->no_surat}}">Learn More</button></td>
                        <td>{{$datas->where('no_surat',$nos->no_surat)->first()->penjabat}}</td>
                        <td>{{$datas->where('no_surat',$nos->no_surat)->first()->perusahaan}}</td>
                        <td>
                            <form action="{{url('generate-pdf')}}" method="post">
                                @csrf
                                <input type="hidden" name="no_surat" value="{{$datas->where('no_surat',$nos->no_surat)->first()->no_surat}}">
                                <button type="submit" class="btn btn-secondary" src="../img/vector.png">Cetak PDF</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
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
                        <th>Data Peserta</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Kompetensi Keahlian</th>
                    </tr>
                </thead>
                <tbody class="isi">
            </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" herf="/suratpermohonanadmin">Back</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<script>
    $(".learn").click(function(){
        var surat = $(this).data("surat");

        $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $.ajax({
            type: "POST",
            data : {'surat' : surat},
            cache: false,
            url: "suratpermohonanadmin",
            success: function(data){
                var temple = `
                    ${data.map((data, i) => `
                        <tr>
                            <th>${data[0]}</th>
                            <th>${data[1]}</th>
                            <th>${data[2]}</th>
                            <th>${data[3]}</th>
                        </tr>
                    `).join('')}
                    `
                $(".isi").html(temple);
                $("#exampleModal").modal('show');
            }
        });

    });
</script>
@endsection
