@extends('layouts.master-without-nav')
@section('title')
    Sign Up
@endsection
@section('content')

    <section class="auth-page-wrapper bg-primary-subtle py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-0 p-2">
                        <div class="row g-0">
                            <div class="col-xxl-5">
                                <div class="card auth-card h-100 border-0 shadow-none d-none d-sm-block overflow-hidden mb-0">
                                    <div class="position-absolute top-0 end-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="500" height="800" preserveAspectRatio="none" viewBox="0 0 500 800">
                                            <g mask="url(&quot;#SvgjsMask1083&quot;)" fill="none">
                                                <path d="M51.34 537.01L107.63 569.51L107.63 634.51L51.34 667.01L-4.95 634.51L-4.95 569.51zM51.34 732.01L107.63 764.51L107.63 829.51L51.34 862.01L-4.95 829.51L-4.95 764.51zM220.22 244.51L276.51 277.01L276.51 342.01L220.22 374.51L163.93 342.01L163.93 277.01zM220.22 634.51L276.51 667.01L276.51 732.01L220.22 764.51L163.93 732.01L163.93 667.01zM163.93 732.01L220.22 764.51L220.22 829.51L163.93 862.01L107.63 829.51L107.63 764.51zM276.51 537.01L332.81 569.51L332.81 634.51L276.51 667.01L220.22 634.51L220.22 569.51zM445.39 49.51L501.69 82.01L501.69 147.01L445.39 179.51L389.1 147.01L389.1 82.01zM445.39 244.51L501.69 277.01L501.69 342.01L445.39 374.51L389.1 342.01L389.1 277.01zM389.1 342.01L445.39 374.51L445.39 439.51L389.1 472.01L332.81 439.51L332.81 374.51zM445.39 439.51L501.69 472.01L501.69 537.01L445.39 569.51L389.1 537.01L389.1 472.01zM389.1 732.01L445.39 764.51L445.39 829.51L389.1 862.01L332.81 829.51L332.81 764.51zM501.69 147.01L557.98 179.51L557.98 244.51L501.69 277.01L445.39 244.51L445.39 179.51z" stroke="rgba(64, 49, 159, 1)" stroke-width="2"></path>
                                                <path d="M44.84 537.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM101.13 569.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM101.13 634.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM44.84 667.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM-11.45 634.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM-11.45 569.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM44.84 732.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM101.13 764.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM101.13 829.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM44.84 862.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM-11.45 829.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM-11.45 764.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 244.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM270.01 277.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM270.01 342.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 374.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM157.43 342.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM157.43 277.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 634.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM270.01 667.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM270.01 732.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 764.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM157.43 732.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM157.43 667.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 829.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM157.43 862.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM270.01 537.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 569.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 634.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM213.72 569.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 49.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 82.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 147.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 179.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 147.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 82.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 244.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 277.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 342.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 374.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 342.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 277.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 439.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 472.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 439.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 374.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 472.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM495.19 537.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 569.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 537.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 732.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 764.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM438.89 829.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM382.6 862.01 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 829.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM326.31 764.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM551.48 179.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0zM551.48 244.51 a6.5 6.5 0 1 0 13 0 a6.5 6.5 0 1 0 -13 0z" fill="rgba(64, 49, 159, 1)"></path>
                                                <path d="M31.74 -12.53L63.78 5.97L63.78 42.97L31.74 61.47L-0.3 42.97L-0.3 5.97zM63.78 42.97L95.83 61.47L95.83 98.47L63.78 116.97L31.74 98.47L31.74 61.47zM31.74 431.47L63.78 449.97L63.78 486.97L31.74 505.47L-0.3 486.97L-0.3 449.97zM63.78 597.97L95.83 616.47L95.83 653.47L63.78 671.97L31.74 653.47L31.74 616.47zM31.74 653.47L63.78 671.97L63.78 708.97L31.74 727.47L-0.3 708.97L-0.3 671.97zM31.74 764.47L63.78 782.97L63.78 819.97L31.74 838.47L-0.3 819.97L-0.3 782.97zM95.83 320.47L127.87 338.97L127.87 375.97L95.83 394.47L63.78 375.97L63.78 338.97zM127.87 486.97L159.92 505.47L159.92 542.47L127.87 560.97L95.83 542.47L95.83 505.47zM159.92 98.47L191.96 116.97L191.96 153.97L159.92 172.47L127.87 153.97L127.87 116.97zM191.96 153.97L224 172.47L224 209.47L191.96 227.97L159.92 209.47L159.92 172.47zM191.96 375.97L224 394.47L224 431.47L191.96 449.97L159.92 431.47L159.92 394.47zM159.92 431.47L191.96 449.97L191.96 486.97L159.92 505.47L127.87 486.97L127.87 449.97zM159.92 542.47L191.96 560.97L191.96 597.97L159.92 616.47L127.87 597.97L127.87 560.97zM159.92 653.47L191.96 671.97L191.96 708.97L159.92 727.47L127.87 708.97L127.87 671.97zM224 98.47L256.05 116.97L256.05 153.97L224 172.47L191.96 153.97L191.96 116.97zM256.05 153.97L288.09 172.47L288.09 209.47L256.05 227.97L224 209.47L224 172.47zM224 209.47L256.05 227.97L256.05 264.97L224 283.47L191.96 264.97L191.96 227.97zM224 431.47L256.05 449.97L256.05 486.97L224 505.47L191.96 486.97L191.96 449.97zM256.05 597.97L288.09 616.47L288.09 653.47L256.05 671.97L224 653.47L224 616.47zM224 653.47L256.05 671.97L256.05 708.97L224 727.47L191.96 708.97L191.96 671.97zM256.05 708.97L288.09 727.47L288.09 764.47L256.05 782.97L224 764.47L224 727.47zM320.13 42.97L352.18 61.47L352.18 98.47L320.13 116.97L288.09 98.47L288.09 61.47zM288.09 98.47L320.13 116.97L320.13 153.97L288.09 172.47L256.05 153.97L256.05 116.97zM288.09 209.47L320.13 227.97L320.13 264.97L288.09 283.47L256.05 264.97L256.05 227.97zM320.13 264.97L352.18 283.47L352.18 320.47L320.13 338.97L288.09 320.47L288.09 283.47zM288.09 431.47L320.13 449.97L320.13 486.97L288.09 505.47L256.05 486.97L256.05 449.97zM320.13 708.97L352.18 727.47L352.18 764.47L320.13 782.97L288.09 764.47L288.09 727.47zM352.18 -12.53L384.22 5.97L384.22 42.97L352.18 61.47L320.13 42.97L320.13 5.97zM384.22 42.97L416.27 61.47L416.27 98.47L384.22 116.97L352.18 98.47L352.18 61.47zM352.18 209.47L384.22 227.97L384.22 264.97L352.18 283.47L320.13 264.97L320.13 227.97zM352.18 320.47L384.22 338.97L384.22 375.97L352.18 394.47L320.13 375.97L320.13 338.97zM352.18 431.47L384.22 449.97L384.22 486.97L352.18 505.47L320.13 486.97L320.13 449.97zM384.22 486.97L416.27 505.47L416.27 542.47L384.22 560.97L352.18 542.47L352.18 505.47zM384.22 597.97L416.27 616.47L416.27 653.47L384.22 671.97L352.18 653.47L352.18 616.47zM384.22 708.97L416.27 727.47L416.27 764.47L384.22 782.97L352.18 764.47L352.18 727.47zM416.27 -12.53L448.31 5.97L448.31 42.97L416.27 61.47L384.22 42.97L384.22 5.97zM416.27 209.47L448.31 227.97L448.31 264.97L416.27 283.47L384.22 264.97L384.22 227.97zM416.27 320.47L448.31 338.97L448.31 375.97L416.27 394.47L384.22 375.97L384.22 338.97zM448.31 375.97L480.35 394.47L480.35 431.47L448.31 449.97L416.27 431.47L416.27 394.47zM448.31 597.97L480.35 616.47L480.35 653.47L448.31 671.97L416.27 653.47L416.27 616.47zM416.27 653.47L448.31 671.97L448.31 708.97L416.27 727.47L384.22 708.97L384.22 671.97zM512.4 375.97L544.44 394.47L544.44 431.47L512.4 449.97L480.35 431.47L480.35 394.47zM480.35 431.47L512.4 449.97L512.4 486.97L480.35 505.47L448.31 486.97L448.31 449.97zM480.35 764.47L512.4 782.97L512.4 819.97L480.35 838.47L448.31 819.97L448.31 782.97z" stroke="rgba(0, 0, 0, 0)" stroke-width="2"></path>
                                            </g>
                                            <defs>
                                                <mask id="SvgjsMask1083">
                                                    <rect width="500" height="800" fill="#ffffff"></rect>
                                                </mask>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="card-body py-5 d-flex justify-content-between flex-column h-100 position-relative gap-4">
                                        <div class="text-center">
                                            <h2 class="text-white fw-medium lh-base text-capitalize mb-3">Let's get started with your <span class="text-warning">30 days free trial</span></h2>
                                            <p class="text-white text-opacity-75">It brings together your tasks, projects, timelines, files and more</p>
                                        </div>
                                    
                                        <div class="text-center">
                                            <p class="text-white text-opacity-75 mb-0 mt-3">
                                                &copy;
                                                <script>document.write(new Date().getFullYear())</script> Judia. Crafted with <i class="bi bi-heart-fill text-danger"></i> by <a href="#!" class="text-white">Themesbrand</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="fs-3xl">Create your free account</h5>
                                            <p class="text-muted">Get your free Judia account now</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form class="needs-validation" novalidate action="index">

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control bg-light border-light" id="useremail" placeholder="Enter email address" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control bg-light border-light" id="username" placeholder="Enter username" required>
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" class="form-control password-input bg-light border-light pe-5" onpaste="return false" placeholder="Enter password" id="password-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-sm text-muted fst-italic">By registering you agree to the Judia <a href="pages-term-conditions" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-sm">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-xs mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-xs mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-xs mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-xs mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title position-relative">
                                                        <h5 class="fs-sm mb-4 title text-muted">Create account with</h5>
                                                    </div>

                                                    <div>
                                                        <button type="button" class="btn btn-subtle-primary btn-icon "><i class="ri-facebook-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-danger btn-icon "><i class="ri-google-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-dark btn-icon "><i class="ri-github-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-info btn-icon "><i class="ri-twitter-fill fs-lg"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Already have an account ? <a href="auth-signin" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
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