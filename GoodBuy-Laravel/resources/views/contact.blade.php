@extends('layouts.app')
@section('titulo')
  Contacto
@endsection
@section('content')
<div class="container-fluid">
<div class=" col-sm-12 col-md-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h3 class="text-center">CONTACTO</h3>
      <hr class="danger-color-dark">
        <form>
          <div class="md-form">
             <i class="fas fa-user prefix"></i>
             <input type="text" id="nombre" class="form-control">
             <label for="nombre">Nombre</label>
          </div>
          <div class="md-form">
             <i class="fas fa-envelope-open-text prefix"></i>
             <input type="email" id="e-mail" class="form-control">
             <label for="e-mail">E-mail</label>
          </div>
          <div class="md-form">
             <i class="fas fa-phone-volume prefix"></i>
             <input type="tel" id="tel" class="form-control">
             <label for="tel">Celular</label>
          </div>
          <div class="md-form">
             <i class="fas fa-pencil-alt prefix"></i>
             <textarea id="texto" class="md-textarea" ></textarea>
             <label for="texto">Ingresa tus comentarios</label>
          </div>
          <div class="text-center">

            <button type="button" class="btn btn-lg yellow accent-3" name="button">ENVIAR</button>
          </div>
          <!-- <div class="text-center mt-2">
            <button type="button" class="btn  light-blue lighten-1" name="button"><i class="fab fa-twitter-square prefix">  Twitter</i></button>
            <button type="button" class="btn peach-gradient" name="button"><i class="fab fa-instagram prefix"></i>  Instragram</button>
            <button type="button" class="btn light-blue darken-4" name="button"><i class="fab fa-facebook-f prefix"></i>  Facebook</button>
          </div> -->

        </form>
    </div>
  </div>

</div>
</div>
@endsection
