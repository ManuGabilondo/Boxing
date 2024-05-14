@extends('layouts.master-without-nav')
@section('title')
   Login
@endsection
@section('content')
<?php
$random = rand(1, 5);
?>
    <section
        class="auth-page-wrapper login<?=$random?>  py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center h-24">
                <div class="col-lg-5">
                    <div class="card card-login mb-0 p-0">
                        <div class="row g-0">
                            <!--end col-->
                            <div class="col-xxl-12 mx-auto">
                                <div class="card card-login mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5">
                                        <div class="text-center">
                                              <img src="{{ URL::asset('images/login/05.jpg') }}" alt="SYPHUS" height="100px" class='img-responsive'>
                                        </div>
                                        <div class="p-2 ">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative ">
                                                        <input type="text"
                                                            class="form-control password-input @error('email') is-invalid @enderror"
                                                            name="email" value="" id="email"
                                                            placeholder="Introduzca su email" required>
                                                        @error('email')
                                                            <span class="invalid-feedback text-start" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                   
                                                    <label class="form-label" for="password-input">Contraseña <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" name="password"
                                                            class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                            placeholder="Introduzca su contraseña" id="password-input"
                                                            value="" required>
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                        @error('password')
                                                            <span class="invalid-feedback text-start" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                              
                                                <div class="mt-4">
                                                    <button class="btn btn-danger w-100" type="submit">Entrar</button>
                                                </div>
                                                <div class="text-center mt-5"> <p class="mb-0">No tienes una cuenta?
                                                    <a href="{{ route('register') }}" class="fw-semibold text-secondary text-decoration-underline">Registrate</a>
                                                </p> 
                                                </div>
                                            </form>

                                           
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
@section('scripts')
    <!--password addon init js-->
    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
