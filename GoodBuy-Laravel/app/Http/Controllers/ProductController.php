<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
  public function search(Request $req){
    $busq=$req['buscador'];
    $result=Product::where('titulo', 'like', $busq . '%') -> get();
    $vac=compact('result');
    return view('abmProducts',$vac);
  }
  public function guardarArchivo(Request $req){
    $reglas=[
      'title'=>'string',
      'price'=>'numeric',
      'description'=>'string',
      'img'=>'file'
    ];
    $mensajes=[
      'string'=>'El campo :attribute de ser texto',
      'min'=>'El campo :attribute tiene un minimo de :min',
      'max'=>'El campo :attribute tiene un maximo de :max',
      'numeric'=>'El campo :attribute debe ser numerico'
    ];
    $this->validate($req,$reglas,$mensajes);
    $product=new Product();

    $ruta=$req->file('img')->store("public");
    $nomgreArchivo=basename($ruta);
    $product->imageURL=$nomgreArchivo;

    $product->titulo=$req['title'];
    $product->precio=$req['price'];
    $product->description=$req['description'];
    $product->save();
    return redirect("abmProducts");
  }
}
