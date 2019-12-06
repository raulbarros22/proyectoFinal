@extends('layouts.app')
@section('titulo')
  Home
@endsection
@section('content')

  <!--2- Nav-->
  <div class="container-fluid border-top">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="">CAMARAS</a>
      </li>
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="">AUDIO</a>
      </li>
      <li class="nav-item">
        <a class="btn nav-link text-dark border-right yellow accent-3" href="celulares.php">SMARTPHONE</a>
      </li>
      <li class="nav-item">
        <a class="btn nav-link text-dark yellow accent-3" href="">ACCESORIOS</a>
      </li>
    </ul>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link text-dark border-right border-bottom" href="#!"><i class="fas fa-heart prefix px-2"></i>Me
          Gusta!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark border-bottom" href="#!"><i
            class="fas fa-cart-arrow-down prefix px-2"></i>Carrito!</a>
      </li>
    </ul>
  </div>

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

  <!-- Card-->
  <div class="container">
    <p class="accesorios">Los mejores accesorios!!</p>
    <hr>
  </div>
  <div class="container justify-content-center">
    <div class="row">
      <div class="col-sm-12 col-md-3 justify-content-center">
        <div class="card" style="width: 13rem;">
          <img class="card-img-top" src="/images/accesorios.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">ACCESORIOS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 justify-content-center">
        <div class="card" style="width: 13rem;">
          <img class="card-img-top" src="/images/camara.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">CAMARAS</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 justify-content-center">
        <div class="card" style="width: 13rem;">
          <img class="card-img-top" src="/images/celular.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">SMARTPHONE</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="/celulares" class="btn yellow accent-3">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 justify-content-center">
        <div class="card" style="width: 13rem;">
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

  <!-- Borrar BRs  -->
  <br><br><br><br><br><br>
  <div class="container">
    <img src="/images/audio.jpg" class="img-fluid" alt="Responsive image">
  </div>

    <!-- Borrar BRs  -->
  <br><br><br><br><br><br>
  <div class="container">
    <p class="accesorios">
      Tenemos las mejores marcas!
    </p>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logodell.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logohp.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logoacer.jpg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
        <img src="/images/logolenovo.jpg" class="img-fluid" alt="Responsive image">
      </div>
    </div>
  </div>

    <!-- Borrar BRs  -->
  <br><br><br><br><br><br><br><br><br>
  <!--CUOTAS-->
  <div class="card text-center" style="background-color:white;">
    <div class="container-fluid  my-2">
      <div class="row">
        <div class="col-md-3 border-right card-body ">
          <p class="titulo">Pagá con crédito y debito</p>
          <p><a href="nav-link"> Ver Promociones!</a></p>
          <a class="fas fa-credit-card fa-2x prefix" href=""></a>


        </div>
        <div class="col-md-3 border-right card-body">
          <p class="titulo">Retiro gratis en cualquier</p>

          <p><a href="nav-link"> Sucursal!</a></p>
          <a class="fas fa-home fa-2x prefix" href=""></a>
        </div>
        <div class="col-md-3 border-right card-body">
          <p class="titulo">El envió más rápido</p>
          <p><a href="nav-link">Segui tu envió!</a></p>
          <a class="fas fa-truck fa-2x prefix" href=""></a>
        </div>
        <div class="col-md-3  card-body">
          <p class="titulo">Compra en GoodBuy!</p>
          <p><a href="nav-link"> Beneficios!</a></p>
          <a class="fas fa-shopping-cart fa-2x prefix" href=""></a>
        </div>
      </div>
    </div>
  </div>
  <br>

@endsection
