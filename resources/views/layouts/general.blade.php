<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tutorias - @yield('title') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('css')
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <img src={{ asset('images/mapache.jpg') }} width="50" alt="Hola">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent02">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav">



                </ul>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav w-100 justify-content-evenly">
                        <a class="nav-item nav-link active" href="{{ route('coordinador.index') }}">Evaluación</a>
                        <a class="nav-item nav-link" href="#">Actividades</a>
                        <a class="nav-item nav-link" href="#">Sesiones</a>
                        <a class="nav-item nav-link" href="#">Participaciones</a>
                        <a class="nav-item nav-link" href="#">Evalua</a>

                        <a class="nav-item nav-link" href="#">Test01</a>

                        <a class="nav-item nav-link " href="#">Test02<i class="fa fa-envelope-open"
                                aria-hidden="false"></i>
                        </a>
                        <a class="nav-item nav-link " href="#"><i class="fa fa-user"
                                aria-hidden="false"></i></a>

                    </div>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="collapse navbar-collapse" id="navbarSupportedContent01">
                            <div class="navbar-nav w-100 justify-content-evenly">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->id . '        ' }}{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>

                            </div>

                        </div>

                    @endguest
                </ul>
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    @yield('js')
    @include('sweetalert::alert')

</body>

</html>
