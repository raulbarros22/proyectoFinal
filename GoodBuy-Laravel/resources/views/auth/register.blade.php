@extends('layouts.app')
@section('titulo')
Registro
@endsection
@section('content')
<div class="container" style="margin: 30px auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center">REGISTRO</h3>
                <hr class="danger-color-dark">
                <form id="form-register" method="POST" class="text-center border border-light "
                    action="{{ route('register') }}" enctype="multipart/form-data" onSubmit="return validar(this)">
                    @csrf
                    <div class="form-row mb-4">
                        <div class="col">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{old('name')}}" placeholder="Nombre" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                                name="surname" value="{{old('surname')}}" placeholder="Apellido" autocomplete="surname"
                                autofocus>

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">

                        <div class="col">
                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror"
                                name="dni" value="{{old('dni')}}" placeholder="DNI" autocomplete="dni" autofocus>

                            @error('dni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" value="{{old('address')}}" placeholder="Domicilio" autocomplete="address"
                                autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input id="telefono" type="text"
                                class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                value="{{old('telefono')}}" placeholder="Telefono" autocomplete="telefono" autofocus>

                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Contraseña" autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="Repetir contraseña"
                                autocomplete="new-password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info my-4 ">

                        Registro
                    </button>
                </form>
            </div>
        </div>
        @endsection