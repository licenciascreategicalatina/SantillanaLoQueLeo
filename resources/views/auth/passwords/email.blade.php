<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="The books">
    <meta name="keywords" content="books">
    <meta name="author" content="aicode">
    <title>{{ config('app.name', 'Forgot-password') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/image/favi.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/form-validation.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/page-auth.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Forgot Password v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <img width="300" height="100" src="/image/creategica-logo.png" alt="">
                                </a>

                                <h4 class="card-title mb-1">¿Has olvidado tu contraseña?</h4>
                                <p class="card-text mb-2">Ingrese su correo electrónico y le enviaremos instrucciones para restablecer tu contraseña</p>

                                <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form-label">Correo electrónico</label>

                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email"
                                            placeholder="books@example.com" aria-describedby="email"
                                            value="{{ old('email') }}" tabindex="1" required autofocus />

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary btn-block" tabindex="2">Enviar enlace de restablecimiento</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{ route('login') }}">
                                        <i data-feather="chevron-left"></i>
                                        Atrás para iniciar sesión
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


   <!-- BEGIN: Vendor JS-->
   <script src="/app-assets/js/vendors.min.js"></script>
   <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Theme JS-->
   <script src="/app-assets/js/app-menu.min.js"></script>
   <script src="/app-assets/js/app.min.js"></script>
   <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/page-auth-forgot-password.min.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
