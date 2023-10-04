<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SAUVIE') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Nucleo Icons -->
    <link href="{{ asset("assets/css/nucleo-icons.css")}}" rel="stylesheet"/>
    <link href="{{ asset("assets/css/nucleo-svg.css")}}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset("assets/css/material-dashboard.css?v=3.1.0")}}" rel="stylesheet"/>
</head>
<body>
<div class="bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}">
                            {{ config('app.name', 'SAUVIE') }}
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                          </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                       href="{{ route('home') }}">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        {{__("Tableau de bord")}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('register') }}">
                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        {{ __("Nouveau compte") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="{{ route('login') }}">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        {{ __("Connexion") }}
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-lg-flex d-none">
                                <li class="nav-item d-flex align-items-center">
                                    <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank"
                                       href="https://www.aino-digital.com/">S</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
             style="background-image: url('{{ asset("assets/img/sauvie.jpg") }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                @yield('content')
            </div>
        </div>
    </main>

    <script>
        window.User = {
            id: {{ optional(auth()->user())->id }}
        }
    </script>
    <script src="{{ asset('js/push.js') }}"></script>
</div>
</body>
</html>
