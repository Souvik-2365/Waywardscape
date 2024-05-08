<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-20/css/style.css">
    <style>
        .img {
    background-image: url('https://preview.colorlib.com/theme/bootstrap/login-form-20/images/bg.jpg');
    background-size: cover;
    background-position: center;
    /* filter: blur(5px); Adjust the blur strength as needed */
}
.card{
        background: rgba(255, 255, 255, 0.26);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
overflow: hidden;
    }

    </style>

<body class="img js-fullheight">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5 mt-5">
                    <h2 class="heading-section">Login </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 card">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        @if (Session::get('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                         @if (Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('userlogin') }}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">New Customer? &nbsp;<a href="{{ route('registeruser') }}">create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>
