@extends('layouts.app')
@section('titulo')
  Home
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
                              <form method="post" action="/agregar" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group"><label>Titulo</label><input class="form-control" type="text"
                                          name="title" required=""></div>
                                  <div class="form-group"><label>Precio</label><input class="form-control"
                                          type="number" step=".01" name="price" required=""></div>
                                  <div class="form-group"><label>Descripción</label><textarea class="form-control"
                                          name="description" required=""></textarea></div>
                                  <div class="form-group"><label>Imagen</label><input class="d-flex" type="file"
                                          name="img" required="" accept="image/*"></div>
                                  <div><input type="hidden" name="form" value="form1"></div>
                                  <div class="form-row" id="button-row">
                                      <div class="col"><button class="btn btn-success"
                                              type="submit">Añadir</button><button class="btn btn-danger" type="reset"
                                              style="margin-left: 12px;">Resetear</button></div>
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
                                <form action="/abmProducts" method="POST">
                                  @csrf
                                    <div class="form-group"><input class="form-control" type="search"
                                            data-toggle="tooltip" data-bs-tooltip="" data-placement="bottom"
                                            placeholder="Buscar" name="buscador"
                                            title="Busque un producto para modificarlo o eliminarlo"></div>
                                </form>
                                @isset($result)
                                  <form method="post" action="/abmProducts/modificar">
                                    @csrf
                                      <div class="form-group"><label>Titulo</label><input class="form-control" type="text"

                                      name="title" value='{{$result[0]['titulo']}}'></div>

                                  </form>
                                  <div class="form-group"><label>Precio</label><input class="form-control"
                                          type="number"  name="price" value='{{$result[0]['precio']}}'></div>
                                  <div class="form-group"><label>Descripción</label><textarea class="form-control"
                                   name="description">{{$result[0]['description']}}</textarea></div>
                                  <div class="form-group"><label>Imagen</label><input class="d-flex" type="file"
                                   name="imgURL"></div>
                                  <div><input type="hidden" name="form" value="form2"></div>
                                  <div><input type="hidden" name="id" value="{{$result[0]['id']}}"></div>
                                  <div class="form-row" id="button-row">
                                      <div class="col"><button class="btn btn-success"
                                              type="submit">Modificar</button></div>
                                  </div>
                                  <form method="post" action="/borrar">
                                  <div><input type="hidden" name="delete" value="true"></div>
                                  <div><input type="hidden" name="id" value="{{$result[0]['id']}}"></div>
                                  <button class="btn btn-danger"
                                                  type="submit">Eliminar</button>
                                  </form>
                                @endisset


                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
