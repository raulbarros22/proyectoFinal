@extends('layouts.app')
@section('titulo')
  Perfil Usuario
@endsection
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">

                    <h3 class="text-center">Perfil de Usuario</h3>
                    <hr class="danger-color-dark">
                      <form method="" action="">
                          @csrf
                          <div class="md-form">
                             <i class="fas fa-user prefix"></i>
                             <label for="name">Nombre</label>
                             <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" autocomplete="name" autofocus>
                               @error('name')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                          </div>
                          <div class="md-form">
                             <i class="fas fa-user prefix"></i>
                             <label for="surname">Apellido</label>
                             <input type="text" id="surname" class="form-control  @error('surname') is-invalid @enderror" name="surname" value="{{Auth::user()->surname}}" autocomplete="surname" autofocus>
                               @error('surname')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                          </div>
                          <div class="md-form">
                             <i class="fas fa-envelope-open-text prefix"></i>
                             <label for="e-mail">E-mail</label>
                             <input type="email" id="e-mail" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" autocomplete="email" autofocus>
                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                          </div>
                          <div class="md-form">
                             <i class="fas fa-phone-volume prefix"></i>
                             <label for="name">Telefono</label>
                             <input type="text" id="telefono" class="form-control  @error('telefono') is-invalid @enderror" name="telefono" value="{{Auth::user()->telefono}}" autocomplete="telefono" autofocus>
                               @error('telefono')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection