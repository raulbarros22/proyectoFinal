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
                                    id="description-tab" href="#description">Descripción</a></li>
                            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab"
                                    id="specifications-tabs" href="#specifications">Especificaciones</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane active fade show description" role="tabpanel" id="description">
                                <p><strong>A new dual‑camera system captures more of what you see and love. The fastest
                                        chip ever in a smartphone and all‑day battery life let you do more and charge
                                        less. And the highest‑quality video in a smartphone, so your memories look
                                        better&nbsp;than&nbsp;ever.</strong><br></p>
                            </div>
                            <div class="tab-pane fade show specifications" role="tabpanel" id="specifications">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="stat">Display</td>
                                                <td>5.2"</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">Camera</td>
                                                <td>12MP</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">RAM</td>
                                                <td>4GB</td>
                                            </tr>
                                            <tr>
                                                <td class="stat">OS</td>
                                                <td>iOS</td>
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