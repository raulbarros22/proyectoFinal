@extends('layouts.app')
@section('titulo')
  Login
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">

                  <h3 class="text-center">LOGIN</h3>
                  <hr class="danger-color-dark">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="md-form">
                           <i class="fas fa-envelope-open-text prefix"></i>
                           <label for="e-mail">E-mail</label>
                           <input type="email" id="e-mail" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="md-form">
                           <i class="fas fa-pencil-alt prefix"></i>
                           <label for="password">Contraseña</label>
                           <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password"></input>
                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        <div class="custom-control custom-checkbox my-3">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Recuerdame</label>
                        </div>
  
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg yellow accent-3" name="button">Ingresar</button>
                          <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidé mi contraseña') }}
                                </a>
                            @endif
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
