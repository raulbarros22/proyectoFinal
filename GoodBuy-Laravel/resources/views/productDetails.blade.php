@extends('layouts.app')
@section('titulo')
Detalle Producto
@endsection
@section('content')
@php
    $result=json_decode($result);
@endphp
<main class="page product-page">
    <section class="clean-block clean-product dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Detalle del Producto</h2>
            </div>
            <div class="block-content">
                <div class="product-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gallery">
                                <div class="sp-wrap"><a href={{$result->imageURL}}><img
                                            class="img-fluid d-block mx-auto" src={{$result->imageURL}}></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                            <h3>{{$result->titulo}}</h3>
                                <div class="price">
                                    <h3>{{$result->precio}}</h3>
                                </div>
                                <form method="post" action="/addToCart/{{$result->id}}">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"><i class="icon-basket"></i>
                                        Add to Cart
                                    </button>
                                </form>
                                <div class="summary">
                                    <p>{{$result->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab"
                                    id="specifications-tabs" href="#specifications">Especificaciones</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show specifications" role="tabpanel" id="specifications">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="stat">Display (inches)</td>
                                                <td>{{$result->display_size}}</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">Camera</td>
                                                <td>{{$result->camara}}</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">RAM</td>
                                                <td>{{$result->RAM}}</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">OS</td>
                                                <td>{{$result->OS}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection