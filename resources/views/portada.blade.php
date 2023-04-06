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
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
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
    <nav class="nav-top p-33">
        <div class="container-fluid d-flex align-items-center no-padding">
            <button class="toggle-menu" aria-label="Responsive Navigation Menu">
                <img src="{{ asset('images/mapache.jpg') }}" class="img-fluid" alt="tht">
            </button>
            <x-mnututor/>
            
        </div>
    </nav>
 
</body>

</html>
