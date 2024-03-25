@extends('layouts.master-without-nav')
@section('title')
    Sign In
@endsection
@section('content')
    <section
        class="auth-page-wrapper bg-primary-subtle py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-0 p-2">
                        <div class="row g-0">
                            
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5">
                                        <div class="text-center mt-5">
                                            <h5 class="fs-3xl">Welcome Back</h5>
                                            <p class="text-muted">Sign in to continue to Judia.</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form action="index">

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative ">
                                                        <input type="text"
                                                            class="form-control bg-light border-light password-input"
                                                            id="username" placeholder="Enter username" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset" class="text-muted">Forgot
                                                            password?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Password <span
                                                            class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password"
                                                            class="form-control bg-light border-light pe-5 password-input "
                                                            placeholder="Enter password" id="password-input" required>
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember
                                                        me</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                </div>

                                                <div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title position-relative">
                                                        <h5 class="fs-sm mb-4 title">Sign In with</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-subtle-primary btn-icon"><i
                                                                class="ri-facebook-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-danger btn-icon"><i
                                                                class="ri-google-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-dark btn-icon"><i
                                                                class="ri-github-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-info btn-icon"><i
                                                                class="ri-twitter-fill fs-lg"></i></button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="text-center mt-5">
                                                <p class="mb-0">Don't have an account ? <a href="auth-signup"
                                                        class="fw-semibold text-secondary text-decoration-underline">
                                                        SignUp</a> </p>
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
@section('scripts')
    <!--password addon init js-->
    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
