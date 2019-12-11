@extends('layouts.app')
@section('titulo')
Registro
@endsection
@section('content')
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
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="/images/iphone11-160.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">iPhone 11&nbsp;</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Cantidad</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$699</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="/images/Motorola-One-Zoom-160.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Motorola One Zoom</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">5 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">4GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">32GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Cantidad</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$549</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="/images/HP-spectre-160.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">HP Spectre</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">13 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">256GB SSD</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Cantidad</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$1299</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Resumen</h3>
                                <h4><span class="text">Subtotal</span><span class="price">$2547</span></h4>
                                <h4><span class="text">Descuento</span><span class="price">$0</span></h4>
                                <h4><span class="text">Envio</span><span class="price">$0</span></h4>
                                <h4><span class="text">Total</span><span class="price">$2547</span></h4><button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
