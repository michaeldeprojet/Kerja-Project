@extends('layouts.pembimbing')

@section('content-header')

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Input Nilai Siswa</b></h1>
        </div>
      </div>
    </div>

    <div class="m-4">
        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Peserta didik</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Industri</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <div class="mb-3 mx-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Instruktur</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="inputname">
            </div>
        </div>

        <!-- input nilai -->
        
        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Laporan PKL</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Laporan PKL</label>
                    <div class="col-sm-1">
                    <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                    </div>
                </div>
            </div>
        </div>

        <!-- Aspek Sikap -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Sikap</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                    <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                    <div class="col-6 col-sm-1">NILAI</div>
                    <div class="col-6 col-sm-8">KETERANGAN</div>  
                  </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Komitmen dan integritas</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Menghargai dan Menghormati</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kreativitas</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kerja Sama Team</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Disiplin dan Bertanggung Jawab</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>
              </div>
        </div>

        <!-- Aspek Pengetahuan -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Pengetahuan</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                  <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                  <div class="col-6 col-sm-1">NILAI</div>
                  <div class="col-6 col-sm-8">KETERANGAN</div>  
                </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Penguasaan Keilmuan</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kemampuan Mengidentifikasi Masalah</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Kemampuan Menemukan Alternatif Solusi Secara Kreatif</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>
            </div>
        </div>

        <!-- Aspek keterampilan -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Aspek Keterampilan</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">
                <div class="row text-center">
                  <div class="col-6 col-sm-3">KOMPONEN PENILAIAN</div>
                  <div class="col-6 col-sm-1">NILAI</div>
                  <div class="col-6 col-sm-8">KETERANGAN</div>  
                </div>

                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Keahlian dan Keterampilan</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Inovasi dan Kreativitas</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Produktivitas dan Penyelesaian Tugas</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Penguasaan Alat Kerja</label>
                    <div class="col-sm-1">
                      <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputname">
                      </div>
                </div>
            </div>
        </div>

        <!-- Nilai Rata-Rata -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Rata - Rata</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">     
                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Sikap</label>
                    <div class="col-sm-9">
                        <input type="name" class="form-control text-white" id="inputname" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Pengetahuan</label>
                    <div class="col-sm-9">
                        <input type="name" class="form-control text-white" id="inputname" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Aspek Keterampilan</label>
                    <div class="col-sm-9">
                        <input type="name" class="form-control text-white" id="inputname" style="background-color: #7176EF">
                    </div>
                </div>

                <div class="m-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Rata-Rata</label>
                    <div class="col-sm-2">
                        <input type="name" class="form-control text-white" id="inputname" style="background-color: #34365B">
                    </div>
                </div>
            </div>
        </div>


        <!-- Nilai Akhir -->

        <div class="ml-4 my-4">
            <h4>
                <li><b> Nilai Akhir</li>
            </h4>
        </div>

        <div class="card m-4 bg-secondary shadow-sm">
            <div class="container m-3">     
                <div class="m-3 row ">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nilai Akhir</label>
                    <div class="col-sm-2">
                        <input type="name" class="form-control" id="inputname">
                    </div>
                    <div class="col-sm-11 m-4">
                        <button type="button" class="form-control text-white" style="background-color: #7176EF"><b>NA = (Nilai Rata-rata 1,2, &3) x 80% + (Nilai Laporan PKL) x 20% </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5" style="margin-right:30px padding:20px">
            <button class="btn btn-secondary me-md-2" type="button" style="margin-right: 20px; width:190px">View</button>
            <button class="btn btn-success" type="button" style="width:190px">Submit</button>
        </div>

    </div>
@endsection