<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
  <title>@yield('titulo')</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Be+Vietnam|Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/Collapsible-sidebar-left-or-right--Content-overlay.css">
  <link rel="stylesheet" href="/css/Header-Dark.css">
  <link rel="stylesheet" href="/css/Vertical-Mobile-Collapsible-Menu.css">
  <link rel="stylesheet" href="/css/smoothproducts.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

</head>

<body>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark  elegant-color-dark" style="margin-bottom:0px !important">
    <a class="navbar-brand" href="/">GoodBuy!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contacto</a>
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
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}"><span>{{ __('Registrarse') }}</span></a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span>{{ Auth::user()->name }} </span><span>{{Auth::user()->surname}}</span>
            </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="/profile">Perfil de Usuario</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Cerrar Sesion') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      @endguest
        <li class="nav-item">
          <a class="nav-link " href="/carrito">
            <i class="fas fa-cart-arrow-down prefix px-2"></i> Carrito
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="py-4">
    @yield('content')
  </main>
  {{-- </div> --}}
  <footer class="section footer-classic bg-image elegant-color-dark">
    <br>
    <div class="container">
      <div class="row row-30">
        <div class="col-md-4 col-xl-5">
          <div class="pr-xl-4"><a class="brand text-white" href="index.php"><img class="brand-logo-light"
                src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37"
                srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
            <p class="rights text-white">Copyright © 2019 GoodBuy.</p>
            <p class="rights text-white">El uso de este sitio web implica la aceptación de los Términos y Condiciones
              y de las Políticas de Privacidad de GoodBuy S.A. Las fotos son a modo ilustrativo. La venta de
              cualquiera de los productos publicados está sujeta a la verificación de stock. Los precios online para
              los productos presentados/publicados en www.goodbuy.com.ar y/o www.goodbuy.com son válidos
              exclusivamente para la compra vía internet en las páginas antes mencionadas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="text-white">Contacto</h5>
          <dl class="contact-list">
            <dt class="text-white">Direccion:</dt>
            <dd class="text-white">Cordoba 790 San Miguel de Tucumán</dd>
          </dl>
          <dl class="contact-list">
            <dt class="text-white">E-mail:</dt>
            <dd><a class="text-white" href="mailto:ventas@goodbuy.com">ventas@goodbuy.com</a></dd>
          </dl>
          <dl class="contact-list">
            <dt class="text-white">Telefono:</dt>
            <dd><a class="text-white" href="tel:08101234567">0810-123-4567</a> <span>
            </dd>
          </dl>
          <p class="gb-newsletter-subscription-title text-white">¡Recibí las mejores ofertas!</p>
          <input type="email" id="newsletter-subscription" placeholder="Ingresa tu e-mail">
          <input id="subscribe-action" class="subscribe" type="submit" value="SUSCRIBIRME">
        </div>
        <div class="col-md-4 col-xl-3">
          <h5 style="margin-bottom: 20px;" class="text-white">Links</h5>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li><a class="text-white" href="/">Home</a></li>
            <li><a class="text-white" href="/faq">Preguntas Frecuentes</a></li>
            <li><a class="text-white" href="/contact">Contacto</a></li>
            <li>
              <a class="text-white" href="http://www.twitter.com">
                <i class="fab fa-twitter"></i> Twitter
              </a>
            </li>
            <li>
              <a class="text-white" href="http://www.facebook.com">
                <i class="fab fa-facebook-square"></i> Facebook
              </a>
            </li>
            <li>
              <a class="text-white" href="http://www.instagram.com">
                <i class="fab fa-instagram"></i> Instagram
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <br>
  </footer>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="/js/smoothproducts.min.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/register.js" type="text/javascript"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>