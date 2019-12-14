@extends('layouts.app')
@section('titulo')
  Celulares
@endsection
@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-md-4 col-lg-4">
      <div class="card m-auto py-2" style="width: 18rem;">
           <img src="/images/lgk11.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">LG K11</h3>
             <p class="card-text warning"><h4>$23500</h4></p>
             <button type="button" class="btn btn-light"><a style="text-decoration: none" href="/product/1">Ver Producto</a></button>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-4">
      <div class="card m-auto py-2" style="width: 18rem;">
           <img src="/images/huawei79.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Huawei Y9</h3>
             <p class="card-text warning"><h4>$34500</h4></p>
             <button type="button" class="btn btn-light"><a style="text-decoration: none" href="/product/1">Ver Producto</a></button>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-4">
      <div class="card m-auto py-2" style="width: 18rem;">
           <img src="/images/cellg.jpg" class="card-img-top" alt="...">
          <div class="card-body">
         <h3 class="card-title">Motorola G7</h3>
          <p class="card-text warning"><h4>$19500</h4></p>
          <button type="button" class="btn btn-light"><a style="text-decoration: none" href="/product/1">Ver Producto</a></button>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="container text-center my-5">
  <img src="/images/mejores.jpg" class="img-fluid"  alt="Responsive image">
</div>
@endsection
