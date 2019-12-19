@extends('layouts.app')
@section('titulo')
  ABM Productos
@endsection
@section('content')
  <section id="abm">
      <div id="add-product"><a class="btn btn-sm" data-toggle="collapse" aria-expanded="true"
              aria-controls="collapse-1" href="#collapse-1" role="button">Añadir Prodcutos &nbsp;<i
                  class="fas fa-arrow-down"></i></a>
          <div class="collapse show" id="collapse-1">
              <section id="add-form">
                  <div class="container">
                      <div class="row">
                          <div class="col">
                            @if (count($errors)>0)
                              <div class="alert alert-danger">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                  @endforeach
                                </ul>
                              </div>
                            @endif
                              <form method="post" action="/agregar" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-row mb-4">
                                    <label>Titulo</label>
                                    <input class="form-control" type="text" name="title" required="" value="{{old('title')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>Precio</label>
                                    <input class="form-control" type="number" step=".01" name="price" required="" value="{{old('price')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>Descripción</label>
                                    <textarea class="form-control" name="description" required="" value="{{old('description')}}"></textarea>
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>Tamaño Pantalla</label>
                                    <input class="form-control" type="text" name="display_size" required="" value="{{old('display_size')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>Camara</label>
                                    <input class="form-control" type="text" name="camara" required="" value="{{old('camara')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>RAM</label>
                                    <input class="form-control" type="text" name="RAM" required="" value="{{old('RAM')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>OS</label>
                                    <input class="form-control" type="text" name="OS" required="" value="{{old('OS')}}">
                                  </div>
                                  <div class="form-row mb-4">
                                    <label>Imagen<br></label>
                                    <input class="d-flex" type="file" name="img" required="" accept="image/*">
                                  </div>
                                  <div><input type="hidden" name="form" value="form1"></div>
                                  <div class="form-row" id="button-row">
                                      <div class="col">
                                        <button class="btn btn-success" type="submit">Añadir</button>
                                        <button class="btn btn-danger" type="reset" style="margin-left: 12px;">Resetear</button>
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
      </div>
  </section>
    <section id="abm">
        <div id="mod-product"><a class="btn btn-sm" data-toggle="collapse" aria-expanded="true"
                aria-controls="collapse-2" href="#collapse-2" role="button">Modificar/Eliminar Producto&nbsp;<i
                    class="fas fa-arrow-down"></i></a>
            <div class="collapse show" id="collapse-2">
                <section id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form action="/modificar" method="get">
                                  @csrf
                                    <div class="form-row mb-4"><input class="form-control" type="search"
                                            data-toggle="tooltip" data-bs-tooltip="" data-placement="bottom"
                                            placeholder="Buscar" name="buscador"
                                            title="Busque un producto para modificarlo o eliminarlo"></div>
                                </form>
                                @isset($result)
                                  <h3>Resultados de la busqueda:</h3>
                                  <div class="card">

                                  <ul class="list-group">
                                  @forelse ($result as $result)
                                    <a href="/modificar/{{$result['id']}}">
                                     <li class="list-group-item">{{$result['titulo']}}</li>
                                     </a>
                                  @empty
                                    <li class="list-group-item" style="color: black">No hay productos con ese nombre!!</li>

                                  @endforelse
                                  </ul>
                                  </div>

                                @endisset

                              </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
