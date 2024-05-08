<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png"
        href="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset("admin_assets/assets/css/styles.css") }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.47.0/tabler-icons.min.css">

    <title>Waywardscape Admin</title>
</head>

<body>
    <div id="main-wrapper">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">

                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index"
                                    class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg"
                                        class="dark-logo" alt="Logo-Dark" />
                                </a>

                                <div class="position-relative text-center my-4">
                                    <p
                                        class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">
                                        sign in with</p>
                                    <span
                                        class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>

                                @if (Session::get('error'))
                                    <div class="alert bg-primary-subtle text-primary alert-dismissible fade show" role="alert">
                                        <div class="d-flex align-items-center text-primary ">
                                        <i class="ti ti-info-circle me-2 fs-4"></i>
                                            {{ Session::get('error') }}
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif


                                <form method="post" action="{{ route('admin.authenticate') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">

                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">

                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-medium"
                                            href="#">Forgot Password ?</a>
                                    </div>
                                    <button  class="btn btn-primary w-100 py-8 mb-4 rounded-2" >Sign
                                        In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">New to Waywardscape?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('admin.registration') }}">Create an account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="{{ asset("admin_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("admin_assets/assets/libs/simplebar/dist/simplebar.min.js") }}"></script>
    <script src="{{ asset("admin_assets/assets/js/theme/app.init.js") }}"></script>
    <script src="{{ asset("admin_assets/assets/js/theme/theme.js") }}"></script>
    <script src="{{ asset("admin_assets/assets/js/theme/app.min.js") }}"></script>
    <script src="{{ asset("admin_assets/assets/js/theme/sidebarmenu.js") }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
