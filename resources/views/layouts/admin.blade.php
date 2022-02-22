
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Sim PKL</title>

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

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="card-body">
            Start creating your amazing application!
        </div>

        <div class="card-footer">
            Footer
        </div>

    </section>

    <!-- footer -->
    @include('layouts.inc.footer')
    <!-- /.footer -->
    </aside>
    </div>

    @include('layouts.inc.ext-js')
    </body>
    </html>
