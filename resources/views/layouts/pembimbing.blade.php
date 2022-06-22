
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Pembimbing</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('layouts.inc.ext-css')

</head>

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- navbar -->
    @include('layouts.inc.navbar')
    <!-- /.navbar -->

    <!-- sidebar -->
    @include('layouts.inc.Sidebar.sidebarpembimbing')
    <!-- /.sideabr -->

    <div class="content-wrapper">

    <section class="content-header">
    @yield('content-header')
    </section>


    @include('layouts.inc.ext-js')
    @yield('script')
    </body>
    </html>
