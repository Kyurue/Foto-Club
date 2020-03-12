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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
    <script src="https://kit.fontawesome.com/642ec4bc32.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="/home">
          <b style="" class="text-left text-capitalize text-white"> FotoClub</b>
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
        <li class="nav-item"> <a class="nav-link" href="uploadfoto">upload photo</a> </li>
          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile">
                Profiel Pagina
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <?php if(Auth::user()->role == 'admin') : ?> 
                <a class="dropdown-item" href="panel">admin panel</a>
                <?php endif; ?>
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
<footer class="footer">
  <div class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="text-left text-capitalize text-white">FotoClub</h2>
          <p class="text-left text-capitalize text-white">placeholder</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="text-left text-capitalize text-white">Mapsite</h2>
          <ul class="list-unstyled"> <a href="#" class="text-left text-capitalize text-white">placeholder</a> <br> <a href="#" class="text-left text-capitalize text-white">placeholder</a> <br> <a href="#" class="text-left text-capitalize text-white">placeholder</a> <br> <a href="#" class="text-left text-capitalize text-white">placeholder</a> </ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="text-left text-capitalize text-white">Contact</h2>
          <p> <a href="#" class="text-left text-capitalize text-white">
              <i class="fa d-inline mr-3 text-muted fa-phone"></i>placeholder</a> </p>
          <p> <a href="#" class="text-left text-capitalize text-white">
              <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>placeholder</a> </p>
          <p> <a href="#" class="text-left text-capitalize text-white">
              <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>placeholder</a> </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="text-left text-capitalize text-white">Subscribe</h2>
          <form>
            <fieldset class="form-group"> <label class="text-left text-capitalize text-white" for="exampleInputEmail1">placeholder</label> <input type="email" class="form-control" placeholder="Enter email"> </fieldset> <button type="submit" class="btn btn-outline-dark">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center">© Copyright 2018 Fotoclub - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</footer>
</html>