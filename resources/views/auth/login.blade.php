<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="The books">
    <meta name="keywords" content="books">
    <meta name="author" content="aicode">
    <title>{{ config('app.name', 'login') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/image/favicon.png">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="/image/favi.png"> --}}
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

    <link href="/css/main-style-book.css" rel="stylesheet">

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

    <div class="app-content content " style="font-family: 'pluto';">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Left Text-->
                        {{-- <div class="d-none d-lg-flex col-lg-8 align-items-center"> --}}
                        <div class="col-lg-8" style="padding-right: 0; margin-right: -1rem;">
                            <img id="img-background" src="/image/Lo-que-leo-imagen-inicio.jpg" alt="img">
                            {{--id="img-background-login" <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="/image/img-login.png" alt="Img login" />
                            </div> --}}
                        </div>
                        <!-- /Left Text-->

                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg" style="padding: 0">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <div class="text-center mb-3">
                                    {{-- <img width="180" height="60" src="/image/logo.png" alt="Logo santillana" style="border-radius: 1rem"> --}}
                                    <a id="content-logo" href="#">
                                        <img src="/image/loqueleo-logo.png" alt="Logo santillana">
                                    </a>
                                </div>

                                <div class="card border-login-book">
                                    <div class="card-body">
                                        <form class="auth-login-form mt-2" action="{{ route('login') }}" method="POST">
                                            @csrf

                                            <h1 class="text-center mb-1" style="font-weight: 600 !important;">Ingresa tu correo</h1>

                                            <div class="text-center mb-2">
                                                <span id="text-login-span" >Con el que te inscribiste a la cata</span>
                                            </div>

                                            <div class="form-group">
                                                {{-- <label for="login-email" class="form-label">Correo electrónico</label> --}}

                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}"
                                                    placeholder="books@ejemplo.com" aria-describedby="email" tabindex="1"
                                                    autofocus required/>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                {{-- <div class="d-flex justify-content-between">
                                                    <label for="login-password">Contraseña</label>
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}">
                                                            <small>¿Has olvidado tu contraseña?</small>
                                                        </a>
                                                    @endif
                                                </div> --}}
                                                <div class="input-group input-group-merge form-password-toggle">
                                                    <input type="hidden" class="form-control @error('password') is-invalid @enderror"
                                                    id="login-password" name="password" tabindex="2"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" required
                                                    value="password"/>
                                                    {{-- value="admin123"/> --}}

                                                    {{-- <div class="input-group-append">
                                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                    </div>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror --}}
                                                </div>
                                            </div>

                                            <div id="content-login-book" class="text-center">
                                                <button id="btn-login-book" class="btn btn-primary">Inicia tu experiencia</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/app-menu.min.js"></script>
    <script src="/app-assets/js/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
