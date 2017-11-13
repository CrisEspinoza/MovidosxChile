<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Movidos X Chile</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Principal.css') }}" rel="stylesheet">

      <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand">
                        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}"> Home </a></li>
                        @else
                            <!-- Navbar for normal user -->
                            @if (Auth::user()->role_id == 1)
                            <li><a href="{{ route('homeUser') }}">Home</a></li>
                            @endif
                            <!-- Navbar for government user -->
                            @if (Auth::user()->role_id == 2)
                            <li><a href="{{ route('homeGobernment') }}">Home</a></li>
                            @endif
                            <!-- Navbar for organization user -->
                            @if (Auth::user()->role_id == 3)
                            <li><a href="{{ route('homeOrganizations') }}">Home</a></li>
                            @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                            <li><a href="{{ route('colaboradores') }}">Colaboradores</a></li>
                        @else
                            <!-- Navbar for normal user -->
                            @if (Auth::user()->role_id == 1)
                            <li><a href="#">Mis datos</a></li>
                            @endif
                            <!-- Navbar for government user -->
                            @if (Auth::user()->role_id == 2)
                            <li><a href="#">Roles de Usuario</a></li>
                            <li><a href="#">Tipos de Catástrofes</a></li>
                            <li><a href="#">Bancos</a></li>
                            @endif
                            <!-- Navbar for organization user -->
                            @if (Auth::user()->role_id == 3)
                            <li><a href="#">Mis eventos</a></li>
                            @endif
                            <!-- Default navbar -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
