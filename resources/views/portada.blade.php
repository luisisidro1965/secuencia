<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: rgba(86, 61, 124, .05);
        }

        h2,
        ul {
            margin: 0;
        }

        button {
            cursor: pointer;
            background: none;
            border: none;
        }

        .no-padding {
            padding: 0;
        }

        .nav-top {
            background: rgba(86, 61, 124, 0.15);
        }

        .container-fluid {
            max-width: 1200px;
        }

        .list-top {
            margin-left: 50px;
        }

        .list li:not(:last-child) {
            margin-right: 15px;
        }

        .list li a {
            color: rgba(0, 0, 0, 0.5);
            transition: color 0.2s;
        }

        .list li a:hover {
            color: rgba(0, 0, 0, 0.7);
            text-decoration: none;
        }

        @media screen and (max-width: 767px) {
            .list-top {
                position: absolute;
                /*equal to nav height, use JS to calculate nav height in case you don't explicitly define it in your CSS*/
                top: 70px;
                left: 0;
                right: 0;
                transform: translateX(-100%);
                margin-left: 0;
                padding: 1rem;
                transition: transform 0.3s;
            }

            .nav-top.is-active .list-top {
                transform: none;
            }

            .list-top li {
                flex-grow: 1;
            }
        }
    </style>
</head>

<body>
    <nav class="nav-top p-3">
        <div class="container-fluid d-flex align-items-center no-padding">
            <h2 class="logo">LOGO</h2>
            <ul class="d-flex list-unstyled list list-top">
                <li><a href="">About</a></li>
                <li><a href="">Clients</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul class="d-flex list-unstyled list ml-auto">
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
            </ul>
            <button class="toggle-menu ml-2 d-md-none" aria-label="Responsive Navigation Menu">
                <!--icon from https://iconmonstr.com-->
                <img src="{{ asset('images/mapache.jpg') }}" class="img-fluid" alt="">
            </button>
        </div>
    </nav>
    <x-mnututor/>
    <x-tarjeta/>
</body>

</html>
