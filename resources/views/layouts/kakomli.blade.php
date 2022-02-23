
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Kakomli</title>

@include('layouts.inc.ext-css')

</head>

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- navbar -->
    @include('layouts.inc.navbar')
    <!-- /.navbar -->

    <!-- sidebar -->
    @include('layouts.inc.Sidebar.sidebarkakomli')
    <!-- /.sideabr -->

    <div class="content-wrapper">

    <section class="content-header">
    @yield('content-header')
    </section>

    @include('layouts.inc.ext-js')
    </body>
    </html>
