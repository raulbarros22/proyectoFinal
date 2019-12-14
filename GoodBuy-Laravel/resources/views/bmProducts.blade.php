@extends('layouts.app')
@section('titulo')
  ABM Productos
@endsection
@section('content')
<section id="abm">
    <div id="mod-product"><a class="btn btn-sm" data-toggle="collapse" aria-expanded="true"
            aria-controls="collapse-2" href="#collapse-2" role="button">Modificar/Eliminar Producto&nbsp;<i
                class="fas fa-arrow-down"></i></a>
        <div class="collapse show" id="collapse-2">
            <section id="update-form">
                <div class="container">
                    <div class="row">
                        <div class="col">
                          @php
                            $result=json_decode($result);
                          @endphp

                              @if (count($errors)>0)
                                <div class="alert alert-danger">
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                      <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              @endif
                              <form method="post" action="/modificar" enctype="multipart/form-data">
                                @csrf
                                  <div class="form-row mb-4">
                                    <label>Titulo</label>
                                    <input class="form-control" type="text" name="title" value='{{$result->titulo}}' required=""></div>
                                  <div class="form-row mb-4">
                                    <label>Precio</label>
                                    <input class="form-control" type="number"  step=".01" name="price" value='{{$result->precio}}' required=""></div>
                                  <div class="form-row mb-4">
                                    <label>Descripción</label>
                                    <textarea class="form-control" name="description" required="">{{$result->description}}</textarea>
                                  </div>
                                   <div class="form-row mb-4">
                                     <label style="margin-right: 10px">Imagen Original</label>
                                     <img src="{{$result->imageURL}}" alt="" width="15%">
                                   </div>
                                  <div class="form-row mb-4">
                                    <label>Nueva Imagen</label>
                                    <input class="d-flex" type="file" name="image" accept="image/*">
                                  </div>
                                  <div><input type="hidden" name="_method" value="PUT"></div>
                                  <div><input type="hidden" name="id" value="{{$result->id}}"></div>
                                  <div class="form-row" id="button-row">
                                      <div class="col"><button class="btn btn-success"
                                              type="submit">Modificar</button></div>
                                  </div>
                              </form>

                              <form method="post" action="/borrar">
                                @csrf
                              <div><input type="hidden" name="_method" value="DELETE"></div>
                              <div><input type="hidden" name="id" value="{{$result->id}}"></div>
                              <button class="btn btn-danger"
                                              type="submit">Eliminar</button>
                              </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
