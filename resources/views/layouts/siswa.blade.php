
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Siswa</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('layouts.inc.ext-css')


</head>

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- navbar -->
    @include('layouts.inc.navbar')
    <!-- /.navbar -->

    <!-- sidebar -->
    @include('layouts.inc.Sidebar.sidebarsiswa')
    <!-- /.sideabr -->

    <div class="content-wrapper">

    <section class="content-header">
    @yield('content-header')

    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready( function () {
            $('#Table').DataTable();
        } );
     </script>

    </section>

    @include('layouts.inc.ext-js')
    </body>
    </html>
