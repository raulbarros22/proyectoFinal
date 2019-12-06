<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!--Navbar -->
<header>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark  elegant-color-dark">
    <a class="navbar-brand" href="/index">GoodBuy!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faq">Preguntas Frecuentes</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control" type="search" placeholder="Ej: Notebook DELL" aria-label="Search">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="http://www.twitter.com">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="http://www.google.com">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li> -->
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            @if (!isset($_SESSION["name"]))
              <i class="fas fa-user"></i>
            @else
              <p>{{$_SESSION["name"]}}</p>
            @endif
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            @if (!isset($_SESSION["name"]))
              <a class="dropdown-item" href="/login">Login</a>
              <a class="dropdown-item" href="/register">Registracion</a>
            @else
              <a class="dropdown-item" href="/loginOff">Cerrar Sesion</a>
              <a class="dropdown-item" href="/profile">Perfil de Usuario</a>
            @endif
            <a class="dropdown-item" href="/contact">Contacto</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!--/.Navbar -->

<main class="py-4">
    @yield('content')
</main>
</div>
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
        <li><a class="text-white" href="/index">Home</a></li>
        <li><a class="text-white" href="/faq">Preguntas Frecuentes</a></li>
        <li><a class="text-white" href="/register">Registracion</a></li>

      </ul>
    </div>
  </div>
</div>
