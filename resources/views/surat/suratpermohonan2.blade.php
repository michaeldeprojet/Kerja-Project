<!DOCTYPE html>
<html>
<head>
    <title>Surat Permohonan Kelompok</title>
    <style>
        body{
            margin-left: 60px;
            margin-right: 60px;
        }
        
        .biodata{
            margin-bottom: 30px;
            font-family:arial, sans-serif;
        }

        table{
            display:table;
            border-collapse:collapse;
            margin:auto;
         }

         caption{
            margin:20px auto;
            font-size:22px;
            font-family:arial, sans-serif;
            font-weight:bold;
         }

         .tr,.th{
            border:1px solid black;
            text-align:center;
            font-family:calibri,arial,sans-serif;
            padding:10px;
         }

         td{
            border:1px solid black;
            text-align:left;
            font-family:calibri,arial,sans-serif;
            padding:10px;
         }

         .box1{
            font-size: 19px;
            margin-top: 20px;
            padding: 3%;
            width:auto;
            height:20px;
            border:solid 2px black;
            font-size: 19px;
        }

        .table1{
           border: none;
           margin-bottom: 30px;
         font-family:arial, sans-serif;
        }

        .bordertr {
           border: none;
        }
    </style>
</head>
<body>
    <p style="text-align: center">Sekolah Menengah Kejuruan Wikrama <br>
        Jalan Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim <br> Kota Bogor  Provinsi Jawa Barat , Kode Pos 16146 <br>
        Telepon : (0251) 8242411 , Email : prohumasi@smkwikrama.net <br>
        Laman : www.smkwikrama.sch.id</p>
        <hr>

        {{-- <p>No   : {{ $nosurat }}</p> --}}
        <p>Hal   : Permohonaan Praktik Kerja Lapangan</p>
        <p>Lampiran   : 1 Berkas</p>
        <br>
        <p>Yth. {{ $penjabat }}</p>
        <p>{{ $namaperusahaan }}</p>
        <p>{{ $alamatperusahaan }}</p>
        <br>
        <p>Dengan hormat,</p>
        <p style="text-align: justify">dalam rangka pelaksanaan Pendidikan Vokasi terkait dengan program <i>link and match</i>
        guna meningkatkan kompetensi, peserta didik diwajibkan untuk melaksanakan Praktik
        Kerja Lapangan (PKL). Oleh karena itu kami mengajukan permohonan kepada Bapak/ibu
        Pimpinan Perusahaan agar dapat menerima peserta didik kami sebagai berikut (terlampir);</p>


    <p style="text-align: justify">Demikian surat permohonan ini kami ajukan, atas perhatian Bapak/Ibu, kami
    mengucapkan terima kasih.</p>
    <br>
    <br>
    <br>
    <p style="float: right;">Bogor , {{ $date }}</p>
    <br>
    <p style="margin-left:82%; margin-top:20px">Kepala SMK</p>
        <br>
        <br>
        <br>
        <br>
        <br>
    <p style="float: right;"><b>Iin Mulyani, S.Si.</b></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table style="margin-left: 0%; margin-bottom: 20px">
        <thead>
           <tr class="tr">
              <th class="th">No.</th>
              <th class="th">Nama Peserta PKL</th>
              <th class="th">Nis</th>
              <th class="th">Nisn</th>
              <th class="th">Ujikompetensi</th>
           </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $datas)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datas->siswa->nama }}</td>
                <td>{{ $datas->siswa->nis }}</td>
                <td>{{ $datas->siswa->nisn }}</td>
                <td>{{ $datas->siswa->jurusans->jurusan }}</td>
            </tr>
            @endforeach
          </tbody>
    </table>

</body>
</html>

