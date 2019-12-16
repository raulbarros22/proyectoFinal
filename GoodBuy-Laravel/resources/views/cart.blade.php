@extends('layouts.app')
@section('titulo')
Registro
@endsection
@section('content')
@php
    use \App\Http\Controllers\CartController;
    $products = json_decode($result->productos);
@endphp
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Carrito</h2>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                @foreach ($products as $product)
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src={{$product->imageURL}}></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">{{$product->titulo}}&nbsp;</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">{{$product->display_size}} inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">{{$product->RAM}}</span></div>
                                                {{-- <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div> --}}
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Cantidad</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>${{$product->precio}}</span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Resumen</h3>
                                <h4><span class="text">Subtotal</span><span class="price">${{CartController::determineTotal($products)}}</span></h4>
                                {{-- <h4><span class="text">Descuento</span><span class="price">$0</span></h4> --}}
                                <h4><span class="text">Envio</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price">${{CartController::determineTotal($products)}}</span></h4><button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
