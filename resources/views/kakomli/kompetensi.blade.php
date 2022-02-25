@extends('layouts.kakomli')

@section('content-header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:5%;"><b> Kompetensi Keahlian</b></h1>
        </div>
      </div>
    </div>

    <div class="m-4">
        <div class="accordion" id="myAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"><b>Otomatisasi dan Tata Kelola Perkantoran</b></button>									
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                    <div class="card-body" style="padding-left: 40px">
                        <li>Mengetik 10 Jari</li>
                        <li>Mengarsip Surat</li>
                        <li>Korespondensi Bahasa Indonesia</li>
                        <li>Menangani Telepon</li>
                        <li>Menangani Tamu</li>
                        <li>Mempersiapkan Rapat</li>
                        <li>Mengatur Agenda Pimpinan</li>
                        <li>Mengoprasikan Microsoft Office 2013</li>
                        <li>Mengelola Email</li>
                        <li>Mengopersikan Mesin Kantor</li>
                        <li>Mengelola Adm. Keuangan</li>
                        <li>Menggunakan teknologi perkantoran</li>
                        <li>Mengelola Adm. Kepegawaian</li>
                        <li>Mengelola perjalanan dinas pimpinan</li>
                        <li>Kegiatan Humas dan Keprotokolan</li>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <b>Rekayasa Perangkat Lunak</b>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body" style="padding-left: 40px">
                    <li>Membuat Aplikasi Berbasis Desktop</li>
                    <li>Membuat Aplikasi Berbasis Web</li>
                    <li>Membuat Aplikasi Berbasis Mobile</li>
                    <li>Membuat Database</li>
                    <li>Internet Marketing</li>
                    <li>Membuat Game</li>                    
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <b>Teknik Komputer dan Jaringan</b>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body" style="padding-left: 40px">
                    <li>instalasi Perangkat Komputer Personal</li>
                    <li>Instalasi Sistem Operasi dan Aplikasi</li>
                    <li>Instalasi Perangkat Jaringan Lokal (Local Area Network)</li>
                    <li>Instalasi Perangkat Jaringan Berbasis Luas (Wide Area Network)</li>
                </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                      <b>Multimedia</b>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body" style="padding-left: 40px">
                      <li>Desain Komunikasi Visual</li>
                      <li>Fotografi Digital</li>
                      <li>Video Editing</li>
                      <li>Animasi 2D</li>
                      <li>3D Modeling</li>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                      <b>Bisnis Daring dan Pemasaran</b>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body" style="padding-left: 40px">
                      <li>Desain Iklanl</li>
                      <li>Optimasi Sosial Media / Website</li>
                      <li>Penjualan / Pemasaran Online</li>
                      <li>Komunikasi Bisnis</li>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div> 
    

    
@endsection

