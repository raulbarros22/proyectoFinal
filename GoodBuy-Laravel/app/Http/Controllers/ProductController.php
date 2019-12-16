<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

  public function search(Request $req){
    $busq=$req['buscador'];
    $result=Product::where('titulo', 'like', $busq . '%') -> get();
    $vac=compact('result');
    return view('abmProducts',$vac);
  }

  public function modify($id){
    $result = Product::find($id);
    $vac = compact('result');
    return view('bmProducts', $vac);
  }

  public function store(Request $req){
    $reglas=[
      'title'=>'string | min:3',
      'price'=>'numeric',
      'description'=>'string | min:3',
      'img'=>'file'
    ];
    $mensajes=[
      'string'=>'El campo :attribute de ser texto',
      'min'=>'El campo :attribute tiene un minimo de :min',
      'max'=>'El campo :attribute tiene un maximo de :max',
      'numeric'=>'El campo :attribute debe ser numerico',
      'file'=>'El campo :attribute debe ser JPG o JPEG'
    ];
    $this->validate($req,$reglas,$mensajes);
    $product=new Product();

    $ruta=$req->file('img')->store("images");
    $nomgreArchivo= '/images/' . basename($ruta);
    $product->imageURL=$nomgreArchivo;

    $product->titulo=$req['title'];
    $product->precio=$req['price'];
    $product->description=$req['description'];
    $product->save();
    $r=1;
    return redirect("exito/$r");
  }

  public function update(Request $form){
    $reglas=[
      'title'=>'string | min:3',
      'price'=>'numeric',
      'description'=>'string | min:3',
      'img'=>'file'
    ];
    $mensajes=[
      'string'=>'El campo :attribute de ser texto',
      'min'=>'El campo :attribute tiene un minimo de :min',
      'max'=>'El campo :attribute tiene un maximo de :max',
      'numeric'=>'El campo :attribute debe ser numerico',
      'file'=>'El campo :attribute debe ser JPG o JPEG'
    ];
    $this->validate($form,$reglas,$mensajes);

    $result=Product::find($form['id']);

    $ruta=$form->file('image')->store("images");
    $nomgreArchivo= '/images/' . basename($ruta);
    $result->imageURL=$nomgreArchivo;

    $result->titulo=$form['title'];
    $result->precio=$form['price'];
    $result->description=$form['description'];
    $result->save();
    $r=0;
    return redirect("exito/$r");
  }

  public function destroy(Request $form){
    $id=$form['id'];
    $product=Product::find($id);
    $product->delete();
    $r=-1;
    return redirect("exito/$r");
  }

  public function detail($id){
    $result = Product::find($id);
    if($result == null){
      return view('notFound');
    }
    $vac = compact('result');
    return view('productDetails', $vac);
  }

  public function list(){
    $result = Product::all();
    $vac = compact('result');
    return view('celulares', $vac);
  }

}
