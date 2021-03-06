@extends('layouts.app')
@section('titulo')
  Celulares
@endsection
@section('content')
@php
  $result=json_decode($result);
@endphp

<div class="container my-5">
  <div class="row">
    @foreach ($result as $item)
    <div class="col-md-4 col-lg-4">
      <div class="card m-auto py-2" style="width: 18rem;">
           <img src={{$item->imageURL}} class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">{{$item->titulo}}</h4>
            <p class="card-text warning"><h5>USD {{$item->precio}}</h5></p>
             <button type="button" class="btn btn-light"><a style="text-decoration: none" href="/product/{{$item->id}}">Ver Producto</a></button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
