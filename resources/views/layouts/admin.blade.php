
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Halaman Admin</title>

@include('layouts.inc.ext-css')

</head>

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- navbar -->
    @include('layouts.inc.navbar')
    <!-- /.navbar -->

    <!-- sidebar -->
    @include('layouts.inc.Sidebar.sidebaradmin')
    <!-- /.sideabr -->

    <div class="content-wrapper">

    <section class="content-header">
    @yield('content-header')
    </section>


    @include('layouts.inc.ext-js')
    </body>
    </html>
