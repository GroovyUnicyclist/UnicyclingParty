<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Happy Valentines Day Molly!</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="icon" href="/images/Unicycle_Club_Logo_Official_Square.png">

    <style>
        .collapsed.last {
            border-bottom: none
        }
        .div-sqr {
            display: table;
            width: 1.5em;
            height: 1.5em;
            margin-right: 10px;
        }
        .icon-sqr {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            border-radius: .25em;
            background-color:rgb(39, 116, 218);
            color:rgb(255,255,255);
        }
        .fa-heart {
            color: pink;
        }
    </style>
</head>
<body class="bg-gray">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-blue">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img src="/images/Unicycle_Club_Logo_Official_Square.png" class="rounded bg-white" style="width:40px;" alt="Logo">
                    <img src="/images/Unicycle_Club_Title_White.png" style="height:40px;" alt="Title"> --}}
                    <span>Happy Valentines Day Molly! <i class="fas fa-heart icon-sqr"></i></span>
                    {{-- <small style="font-size:50%">at The Ohio State University</small> --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('create') }}">Create New Page</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('trick') }}">Example Trick Page</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('guide') }}">Guide</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}<span class="caret"></span></a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item site-switch">
                            <a class="nav-link" href="{{ route('osu') }}"><img src="/images/Unicycle_Club_Logo_Official_Square.png" class="rounded bg-white" style="width:40px;" alt="Logo"> OSU Club Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-5">
                                <h1>Welcome to Unicycling.Party!</h1>
                                <h3>Your all in one unicycling resource</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <happy-birb />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="margin-bottom:20px">
                                            <div class="card-header">
                                                <h4 style="margin:0">
                                                    <div class="row justify-content-center" style="align-items: center; flex-wrap: nowrap">
                                                        <div class="div-sqr">
                                                            <i class="fas fa-book-open icon-sqr"></i>
                                                        </div>
                                                        Need help getting started?
                                                    </div>
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <h5 style="text-align:center">Follow the <a href="{{ route('guide') }}">Guide</a>!</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3>Explore the disciplines of Unicycling!</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('main.disciplines')
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-center">
                                    <form action="{{ route('send-heart') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="height:100%">Send a ❤️ to the discord server!</button>
                                    </form>
                                    <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/8BAb7Cf" class="btn btn-dark" style="background-color:#7289DA; border-color:#7289DA; margin-left:5px; display: inline-flex; align-items: center; ">
                                        <i class="fab fa-discord fa-2x"></i><span style="margin-left:5px">Join the Discord Server!</span>
                                    </a>
                                </div>
                                {{-- <div class="row justify-content-center">
                                    <img src="/images/Unicycle_Club_Logo_Official_Square.png" style="height:100px;" alt="Logo">
                                </div>
                                <div class="row justify-content-center">
                                    <ul>
                                        <li>
                                            <a href=https://activities.osu.edu/involvement/student_organizations/find_a_student_org?i=309b4a22-a2e1-4838-9c11-c0da3bf12d8a&l=U&c=Columbus&page=2"">Unicycle Club at OSU Directory Page</a>
                                        </li>
                                        <li>
                                            <a href="https://activities.osu.edu/involvement/student_organizations/find_a_student_org/">OSU Student Organization Directory</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
