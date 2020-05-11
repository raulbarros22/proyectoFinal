@extends('layouts.app')
@section('titulo')
  GoodBuy-Home
@endsection
@section('content')

  <!--2- Nav-->
  {{-- <div class="container border-top my-5" style="padding-top: 15px">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="/notebooks">NOTEBOOKS</a>
      </li>
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="/celulares">SMARTPHONE</a>
      </li>
      @if (Auth::user() !== null && Auth::user()->role == 'ADMIN')
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="/abmProducts">ABM Productos</a>
      </li>
      @endif
    </ul>
  </div> --}}

  <div class="container my-5 calesita">
  <header class="promotions">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('/images/dell.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('/images/positivo.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('/images/notebook.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('/images/acer.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  </div>
  <!-- Card-->
  <div class="container my-5">
    <p class="accesorios">Los mejores accesorios!!</p>
    <hr>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-3 main-cards my-3">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="/images/accesorios.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">ACCESORIOS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-3 main-cards my-3">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="/images/camara.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">CAMARAS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-3 main-cards my-3">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="/images/celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">SMARTPHONE</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="/celulares" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-3 main-cards my-3">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="/images/auriculares.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">AURICULARES</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container my-5">
    <img src="/images/audio.jpg" class="img-fluid" alt="Responsive image">
  </div>

  <section class="marcas my-3">
  <div class="container py-3">
    <p class="accesorios">
      Tenemos las mejores marcas!
    </p>
    <hr>

    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logodell.jpg" class="img-fluid" alt="img-dell">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logohp.jpg" class="img-fluid" alt="img-hp">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logoacer.jpg" class="img-fluid" alt="img-acer">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logolenovo.jpg" class="img-fluid" alt="img-lenovo">
      </div>
    </div>
  </div>
  </section>

  <!--CUOTAS-->
  <section class="cuotas">
  <div class="container py-5">
    <div class="card text-center">
      <div class="row">
        <div class="col-md-3 border-right card-body ">
          <p class="titulo">Pagá con crédito y debito</p>
          <p><a href="nav-link"> Ver Promociones!</a></p>
          <a class="fas fa-credit-card fa-2x prefix" href=""></a>
        </div>
        <div class="col-md-3 border-right card-body">
          <p class="titulo">Retiro gratis en cualquier</p>
          <p><a href=""> Sucursal!</a></p>
          <a class="fas fa-home fa-2x prefix" href=""></a>
        </div>
        <div class="col-md-3 border-right card-body">
          <p class="titulo">El envió más rápido</p>
          <p><a href="">Segui tu envió!</a></p>
          <a class="fas fa-truck fa-2x prefix" href=""></a>
        </div>
        <div class="col-md-3 card-body">
          <p class="titulo">Compra en GoodBuy!</p>
          <p><a href=""> Beneficios!</a></p>
          <a class="fas fa-shopping-cart fa-2x prefix" href=""></a>
        </div>
      </div>
    </div>
  </div>
  </section>

@endsection
