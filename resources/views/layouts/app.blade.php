<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
    <!-- Fonts -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="#">
          <b style="" class="text-left text-capitalize text-white"> FotoSite</b>
        </a>
        <form class="form-inline my-lg-0 pl-0"> <input class="form-control mr-sm-2 px-5 text-center" type="text" placeholder="Vul iets in om te zoeken"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">zoek</button> </form>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Categoriën</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">over ons</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">contact</a> </li>
        </ul>
        <ul class="navbar-nav">
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
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <a class="dropdown-item" href="#">
                Profiel Pagina
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
          </li>
        @endguest
          <!-- <li class="nav-item"> <a class="nav-link" href="login">Log in</a> </li> -->
          <!-- <li class="nav-item"> <a class="nav-link text-primary" href="register">Register</a> </li> -->
        </ul>
      </div>
    </div>
  </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
