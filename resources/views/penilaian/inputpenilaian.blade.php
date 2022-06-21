<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Siswa</title>
    <style>
        body{
            margin-left: 50px;
            margin-right: 50px;
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

         .td{
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

   <table style="margin-left: 0%; margin-bottom: 20px">
      <tr class="bordertr">
          <td style="width: 190px">Nama Peserta Didik</td>
          <td style="width: 20px">:</td>
          <td>{{$siswa['nama']}} </td>
      </tr>
      <tr>
          <td>Kelas</td>
          <td>:</td>
          <td>{{$siswa['kelas']}}</td>
      </tr>
      <tr>
          <td>Semester</td>
          <td>:</td>
          <td>{{$siswa['semester']}}</td>
      </tr>
      <tr>
          <td>Kompetensi Keahlian</td>
          <td>:</td>
          <td>{{$siswa['jurusan']}}</td>
      </tr>
      <tr>
          <td>Nama Industri</td>
          <td>:</td>
          <td>{{$namaperusahaan}}</td>
      </tr>
      <tr>
          <td>Nama Instruktur</td>
          <td>:</td>
          <td>{{$namainstruktur}}</td>
      </tr>
   </table>

   <table class="">
      <thead>
         <tr class="tr">
            <th class="th">No.</th>
            <th class="th">Komponen Penilaian</th>
            <th class="th">Skor (0-100)</th>
            <th class="th">Keterangan</th>
         </tr>
      </thead>
      <tbody>

          <!-- Aspek Sikap -->
         <tr class="tr">
            <td class="td">1</td>
            <td class="td"><b>Aspek Sikap</b></td>
            <td class="td"></td>
            <td class="td"></td>
         </tr>
         <tr class="tr">
            <td rowspan="6" class="td"></td>
            <td class="td">a. Penampilan dan kerapihan pakaian </td>
            <td class="td"></td>
            <td class="td"></td>
         </tr>
         <tr class="tr">
            <td class="td">b. Komitmen dan integritas</td>
            <td class="td">{{$attitudes['score']['komitmen_dan_integritas']}}</td>
            <td class="td">{{$attitudes['note']['komitmen_dan_integritas']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">c. Menghargai dan menghormati (kesopanan)</td>
            <td class="td">{{$attitudes['score']['menghargai_dan_menghormati']}}</td>
            <td class="td">{{$attitudes['note']['menghargai_dan_menghormati']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">d. Kreativitas</td>
            <td class="td">{{$attitudes['score']['kreativitas']}}</td>
            <td class="td">{{$attitudes['note']['kreativitas']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">e. Kerja sama tim</td>
            <td class="td">{{$attitudes['score']['kerja_sama_tim']}}</td>
            <td class="td">{{$attitudes['note']['kerja_sama_tim']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">f. Disiplin dan tanggung jawab</td>
            <td class="td">{{$attitudes['score']['disiplin_dan_bertanggung_jawab']}}</td>
            <td class="td">{{$attitudes['note']['disiplin_dan_bertanggung_jawab']}}</td>
         </tr>



         <!-- Aspek Pengetahuan -->
         <tr class="tr">
            <td class="td">2</td>
            <td class="td"><b>Aspek Pengetahuan</b></td>
            <td class="td"></td>
            <td class="td"></td>
         </tr>
         <tr class="tr">
            <td rowspan="3" class="td"></td>
            <td class="td">a. Penguasaan keilmuan </td>
            <td class="td">{{$knowledges['score']['penguasaan_keilmuan']}}</td>
            <td class="td">{{$knowledges['note']['penguasaan_keilmuan']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">b. Kemampuan mengidentifikasi masalah</td>
            <td class="td">{{$knowledges['score']['kemampuan_mengidentifikasi_masalah']}}</td>
            <td class="td">{{$knowledges['note']['kemampuan_mengidentifikasi_masalah']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">c. Kemampuan menemukan alternatif solusi secara kreatif</td>
            <td class="td">{{$knowledges['score']['kemampuan_menemukan_alternatif_solusi_secara_kreatif']}}</td>
            <td class="td">{{$knowledges['note']['kemampuan_menemukan_alternatif_solusi_secara_kreatif']}}</td>
         </tr>

         <!-- Aspek Keterampilan -->
         <tr class="tr">
            <td class="td">3</td>
            <td class="td"><b>Aspek Keterampilan</b></td>
            <td class="td"></td>
            <td class="td"></td>
         </tr>
         <tr class="tr">
            <td rowspan="4" class="td"></td>
            <td class="td">a. Keahlian dan keterampilan</td>
            <td class="td">{{$skills['score']['keahlian_dan_keterampilan']}}</td>
            <td class="td">{{$skills['note']['keahlian_dan_keterampilan']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">b.Inovasi dan kreativitas</td>
            <td class="td">{{$skills['score']['inovasi_dan_kreativitas']}}</td>
            <td class="td">{{$skills['note']['inovasi_dan_kreativitas']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">c.Produktivitas dan penyelesaian tugas</td>
            <td class="td">{{$skills['score']['produktivitas_dan_penyelesaian_tugas']}}</td>
            <td class="td">{{$skills['note']['produktivitas_dan_penyelesaian_tugas']}}</td>
         </tr>
         <tr class="tr">
            <td class="td">d.Penguasaan alat kerja</td>
            <td class="td">{{$skills['score']['penguasaan_alat_kerja']}}</td>
            <td class="td">{{$skills['note']['penguasaan_alat_kerja']}}</td>
         </tr>

         <!-- Nilai rata rata -->
         <tr class="tr">
            <td colspan="2" class="td"><b>Nilai Rata-rata Nilai 1,2, & 3 (80%) </b></td>
            <td class="td"></td>
            <td class="td"></td>
         </tr>
         <tr class="tr">
            <td class="td">4</td>
            <td class="td">Nilai Laporan PKL (20%)</td>
            <td class="td">{{$report['score']}}</td>
            <td class="td">{{$report['note']}}</td>
         </tr>

         <!-- Nilai Akhir -->
         <tr class="tr">
            <td colspan="2" class="td"><b>Nilai Akhir PKL</b></td>
            <td class="td">{{$finalScore}}</td>
            <td class="td"></td>
         </tr>
      </tbody>
   </table>

   <div class="box1">NA = (Nilai Rata-rata 1,2, &3) x 80% + (Nilai Laporan PKL) x 20% </div>

</body>
</html>

