@extends('layouts.master-without-nav')
@section('title')
    Registro
@endsection
@section('content')
<?php
$random = rand(1, 5);
?>
    <section
        class="auth-page-wrapper login<?=$random?> py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-0 p-2">
                        <div class="row g-0">
                           
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="fs-3xl">Crea tu cuenta gratuita</h5>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form method="POST" action="{{ route('create') }}" class="needs-validation" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nombre <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        value="{{ old('name') }}" name="name" id="name"
                                                        placeholder="Introduce tu nombre real" required>
                                                    @error('name')
                                                        <span class="invalid-feedback text-start" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" id="useremail"
                                                        placeholder="Introduce tu cuenta de correo electrónico" required>
                                                    @error('email')
                                                        <span class="invalid-feedback text-start" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Contraseña <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password"
                                                            class="form-control password-input pe-5 @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Introduce una contraseña" id="password-input"
                                                            required>
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

                                                <div class="mb-3">
                                                    <label class="form-label" for="confirm-password-input">Confirmar Contraseña
                                                        <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password"
                                                            class="form-control password-input pe-5 @error('password') is-invalid @enderror"
                                                            name="password_confirmation"
                                                            placeholder="Introduce la misma contraseña"
                                                            id="confirm-password-input" required>
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-sm text-muted fst-italic">Al registrarte a Syphus aceptas nuetras
                                                        the Judia <a href="pages-term-conditions"
                                                            class="text-primary text-decoration-underline fst-normal fw-medium">Condiciones de uso</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-sm">La contraseña debe tener:</h5>
                                                    <p id="pass-length" class="invalid fs-xs mb-2">Minimo de <b>8 carácteres</b></p>
                                                    <p id="pass-lower" class="invalid fs-xs mb-2">En <b>minúcula</b> letras de (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-xs mb-2">En  <b>mayúscula</b> letras de (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-xs mb-0">Al menos <b>numeros entre</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-danger w-100" type="submit">Registrarse</button>
                                                </div>

                                                
                                            </form>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Si ya tienes una cuenta <a href="{{ route('login') }}"
                                                    class="fw-semibold text-primary text-decoration-underline"> Acceder </a>
                                            </p>
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
    <!-- password create init js-->
    <script src="{{ URL::asset('build/js/pages/passowrd-create.init.js') }}"></script>
@endsection
