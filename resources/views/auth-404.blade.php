@extends('layouts.master-without-nav')
@section('title')
    404 Error
@endsection
@section('content')

    <section class="auth-page-wrapper bg-primary-subtle py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-0 p-2">
                        <div class="row g-0">
                            
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="error-img text-center px-5">
                                            <img src="https://img.themesbrand.com/judia/auth/404.png" class="img-fluid" alt="Pagina no encontrada">
                                        </div>
                                        <div class="mt-4 text-center pt-3">
                                            <div class="position-relative">
                                                <h4 class="fs-2xl error-subtitle text-uppercase mb-0">No se encontró la página</h4>
                                                <div class="mt-4">
                                                    <a href="../index" class="btn btn-primary"><i class="bi bi-house me-1"></i>Volver</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection