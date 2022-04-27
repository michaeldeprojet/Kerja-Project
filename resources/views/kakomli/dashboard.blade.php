@extends('layouts.kakomli')

@section('content-header')

  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="color:#34365B; margin-left:10%;"><b> Dashboard</b></h1>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-4">

      <div class="card text-dark bg-white mb-3" style="width:300px; margin-right:20px;">
        <div class="card-header text-center">Jumlah Seluruh Siswa</div>
          <div class="card-body">
            <h3 class="card-text text-center">{{  $keseluruhan }}</h3>
          </div>
      </div>

      <div class="card text-dark bg-white mb-3" style="width: 300px; margin-right:20px;">
        <div class="card-header text-center">Jumlah Siswa PKL</div>
          <div class="card-body">
            <h3 class="card-text text-center">{{ $siswaPKL }}</h3>
          </div>
      </div>

      <div class="card text-dark bg-white mb-3" style="width:300px;">
        <div class="card-header text-center">Jumlah Siswa Belum PKL</div>
          <div class="card-body">
            <h3 class="card-text text-center">{{ $belumPKL }}</h3>
          </div>
      </div>
  </div>

  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/cdb.css" />
  <script
    src="../contrast-bootstrap-pro/js/cdb.js"></script>
  <script
    src="../contrast-bootstrap-pro/js/bootstrap.min.js"></script>
  <script
    src="https://kit.fontawesome.com/9d1d9a82d2.js"
    crossorigin="anonymous"></script>

  <title>How to create bootstrap charts using bootstrap 5</title>
</head>
<style>
  .chart-container {
    width: 937px;
    height: 380px;
    margin: auto;
    padding-right: 3%;
    padding-left: 3%;
    padding-top: 3%;
  }
</style>

<body>
  <div class="card chart-container">
    <canvas id="chart" width="829" height="300" style="display: block; width: 829px; height: 500px;" class="chartjs-render-monitor"></canvas>
  </div>

</body>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script>
  const ctx = document.getElementById("chart").getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["RPL", "MMD", "TKJ", "OTKP",
      "BDP", "TBG", "HOTEL"],
      datasets: [{
        label: 'Kompetensi Keahlian Wikrama',
        backgroundColor: 'rgba(161, 198, 247, 1)',
        borderColor: 'rgb(47, 128, 237)',
        data: [100, 80, 100, 50, 40, 60, 40],
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
          }
        }]
      }
    },
  });
</script>
  

@endsection