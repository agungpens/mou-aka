<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MOU | Login
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logoaka.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('plugins/highlightjs/styles/darkula.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/library/toastr/toastr.css') }}">

    <link href="{{ asset('asset/library/select2/select.css') }}" rel="stylesheet" />

</head>


<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h4>Login</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" action="{{ url('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="username" id="username"
                                            name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"
                                            id="password" name="password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" id="cekLogin">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html"
                                        class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.scripts')

    <script>
        let username = $('#username').val();
        let password = $('#password').val();

        $('#cekLogin').click(function(e) {
            username = $('#username').val();
            password = $('#password').val();
            if (username == '' || password == '') {
                toastr.warning(`Username / Password anda belum di isi!`);
            }
        });
    </script>
    @if (session()->has('success'))
        <script>
            toastr.success(`{{ session('success') }}`);
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            toastr.error(`{{ session('error') }}`);
        </script>
    @endif
    @if (count($errors) > 0)
        <script>
            toastr.error(`{{ $errors->first() }}`);
        </script>
    @endif
</body>

</html>
