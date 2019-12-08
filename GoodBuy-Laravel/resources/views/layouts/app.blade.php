<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

</head>
<body>
    {{-- <div id="app"> --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark  elegant-color-dark">
            {{-- <div class="container"> --}}
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'GoodBuy!') }}
                </a> --}}
                <a class="navbar-brand" href="/">GoodBuy!</a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                  aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul> --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/faq">Preguntas Frecuentes</a>
                        </li>
                      </ul>
                      <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Ej: Notebook DELL" aria-label="Search">
                        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
                      </form>
                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ml-auto"> --}}
                      <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                          <a class="nav-link waves-effect waves-light" href="http://www.twitter.com">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link waves-effect waves-light" href="http://www.facebook.com">
                            <i class="fab fa-facebook-square"></i>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link waves-effect waves-light" href="http://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                          @guest
                                  {{-- <a class="nav-link dropdown-toggle" href="{{ route('login') }}" >
                                  {{ __('Login') }} --}}
                                   <i class="fas fa-user"></i>
                                {{-- </a> --}}
                            {{-- </li> --}}
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="{{ route('login') }}" >{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            @endif
                            <a class="dropdown-item" href="/contact">Contacto</a>
                          </div>

                        @else
                            {{-- <li class="nav-item dropdown"> --}}
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}
                                <span>{{ Auth::user()->name }}</span><span>{{Auth::user()->surname}}</span>

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                  <a class="dropdown-item" href="/profile">Perfil de Usuario</a>
                                  <a class="dropdown-item" href="/contact">Contacto</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                        @endguest

                      </li>
                    </ul>
                </div>
            {{-- </div> --}}
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    {{-- </div> --}}
    <footer class="section footer-classic bg-image elegant-color-dark">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand text-white" href="index.php"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p class="text-white">We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights text-white"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5 class="text-white">Contactos</h5>
              <dl class="contact-list">
                <dt class="text-white">Direccion:</dt>
                <dd class="text-white">Av. Roca 1568, S.M.T</dd>
              </dl>
              <dl class="contact-list">
                <dt class="text-white">E-mail:</dt>
                <dd><a class="text-white" href="mailto:#">goodbuy@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt class="text-white">Telefono</dt>
                <dd><a class="text-white" href="tel:#">+54 9 3815184917</a> <span>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">

              <ul>
                <li><a class="text-white" href="/">Home</a></li>
                <li><a class="text-white" href="/faq">Preguntas Frecuentes</a></li>
                <li><a class="text-white" href="/register">Registracion</a></li>

              </ul>
            </div>
          </div>
        </div>
      </footer>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</body>
</html>
