<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout-width="boxed" data-topbar="dark"
    data-preloader="disable" data-card-layout="borderless" data-bs-theme="light" data-topbar-image="pattern-1">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Syphus SL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->

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
