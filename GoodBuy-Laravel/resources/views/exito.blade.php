@extends('layouts.app')
@section('titulo')
  Exito
@endsection
@section('content')
  <div class="jumbotron">
    @if ($r==1)
      <h3 class="display-4">Producto guardado exitosamente!!</h3>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="/abmProducts" role="button">VOLVER</a>
    @elseif ($r==0)
      <h3 class="display-4">Producto modificado exitosamente!!</h3>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="/abmProducts" role="button">VOLVER</a>
    @else
      <h3 class="display-4">Producto eliminado exitosamente!!</h3>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="/abmProducts" role="button">VOLVER</a>
    @endif
  </div>
@endsection
