<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout-width="boxed" data-topbar="dark"
    data-preloader="disable" data-card-layout="borderless" data-bs-theme="light" data-topbar-image="pattern-1">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Syphus SL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- App favicon -->
    <!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- include head css -->
    @include('layouts.head-css')
    @livewireStyles

    <!--TOAST-->
    <!-- CSS de iziToast -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
<!-- JavaScript de iziToast -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
</head>

@yield('body')


 @include('layouts.topbar')
    <div class="main-content fondo">
        <div class="page-content">
            <div class="container-fluid">

                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            @yield('page-title')
                        </div>
                       </div>
                </div>
                @yield('content')
        </div>
        @include('layouts.footer')
    </div>
@include('layouts.vendor-scripts')
  @livewireScripts
</body>

</html>
