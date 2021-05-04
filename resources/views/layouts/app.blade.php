<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Books') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/image/favicon.png">

    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main-style-book.css" rel="stylesheet">

    @stack('styles')
</head>
<body style="font-family: 'pluto';">
    <div id="app">
        <nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    {{-- <img src="/image/logo-santillana.png" alt="logo"> --}}
                    <img src="/image/loqueleo-logo.png" width="180" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <span class="nav-link-book" style="display: block;padding: 0.5rem 1rem;">Programa de formación a profesores</span>
                            {{-- <a id="text-programa" class="nav-link nav-link-book" href="#">Programa de formación a profesores</a> --}}
                        </li>

                        {{-- <li class="nav-item ml-3" data-toggle="tooltip" data-placement="bottom" title="Disponible 4 de mayo">
                            <span class="nav-link-book" style="display: block;padding: 0.5rem 1rem;">Preescolar</span>
                        </li> --}}

                        <li class="nav-item ml-3 {{ request()->is('preescolar') ? 'active' : '' }}">
                            <a class="nav-link nav-link-book" href="{{ route('day-one') }}">Preescolar</a>
                        </li>

                        <li class="nav-item ml-3 {{ request()->is('primaria') ? 'active' : '' }}">
                            <a class="nav-link nav-link-book" href="{{ route('day-two') }}">Primaria</a>
                        </li>

                        {{-- <li class="nav-item ml-3" data-toggle="tooltip" data-placement="bottom" title="Disponible 5 de mayo">
                            <span class="nav-link-book" style="display: block;padding: 0.5rem 1rem;">Primaria</span>
                        </li> --}}

                        <li class="nav-item ml-3 {{ request()->is('secundaria') ? 'active' : '' }}">
                            <a class="nav-link nav-link-book" href="{{ route('day-three') }}">Secundaria</a>
                        </li>

                       {{--  <li class="nav-item ml-3" data-toggle="tooltip" data-placement="bottom" title="Disponible 6 de mayo">
                            <span class="nav-link-book" style="display: block;padding: 0.5rem 1rem;">Secundaria</span>
                        </li> --}}

                       {{--  <li class="nav-item ml-3" style="opacity: 0;">
                            <a class="nav-link nav-link-book" href="{{ route('import-view') }}">Import</a>
                        </li> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                           {{--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav-link-book" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i id="logout-icon" class="mr-50" data-feather="power"></i>
                                    Cerrar Sesión
                                </a>
                                <form id="logout-form"  method="POST" action="{{ route('logout') }}" class="d-none">
                                    @csrf
                                </form>
                            </li>

                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('scripts')

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
    </script>
    <!--Start of Tawk.to Script-->
   {{--  <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6087294062662a09efc259ed/1f47vi9ls';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/608b300f5eb20e09cf37ee28/1f4fr7ftv';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->
</body>
</html>
