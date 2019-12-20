<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function search(Request $req)
    {
        $busq = $req['buscador'];
        $result = Product::where('titulo', 'like', $busq . '%')->get();
        $vac = compact('result');
        return view('abmProducts', $vac);
    }

    public function modify($id)
    {
        $result = Product::find($id);
        $vac = compact('result');
        return view('bmProducts', $vac);
    }

    public function store(Request $req)
    {
        $reglas = [
            'title' => 'string | min:3',
            'price' => 'numeric',
            'description' => 'string | min:3',
            'img' => 'file',
            'display_size'=>'string',
            'camara'=>'string',
            'RAM'=>'string',
            'OS'=>'string',
            'category'=>'string'
        ];
        $mensajes = [
            'string' => 'El campo :attribute de ser texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'El campo :attribute tiene un maximo de :max',
            'numeric' => 'El campo :attribute debe ser numerico',
            'file' => 'El campo :attribute debe ser JPG o JPEG',
        ];
        $this->validate($req, $reglas, $mensajes);
        $product = new Product();

        $ruta = $req->file('img')->store("images");
        $nomgreArchivo = '/images/' . basename($ruta);
        $product->imageURL = $nomgreArchivo;

        $product->titulo = $req['title'];
        $product->precio = $req['price'];
        $product->description = $req['description'];
        $product->display_size=$req['display_size'];
        $product->camara=$req['camara'];
        $product->RAM=$req['RAM'];
        $product->OS=$req['OS'];
        $product->category=$form['category'];
        $product->save();
        return redirect("exito/1");
    }

    public function update(Request $form)
    {
        $reglas = [
            'title' => 'string | min:3',
            'price' => 'numeric',
            'description' => 'string | min:3',
            'img' => 'file',
            'display_size'=>'string',
            'camara'=>'string',
            'RAM'=>'string',
            'OS'=>'string',
            'category'=>'string'
        ];
        $mensajes = [
            'string' => 'El campo :attribute de ser texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'El campo :attribute tiene un maximo de :max',
            'numeric' => 'El campo :attribute debe ser numerico',
            'file' => 'El campo :attribute debe ser JPG o JPEG',
        ];
        $this->validate($form, $reglas, $mensajes);

        $result = Product::find($form['id']);

        $ruta = $form->file('image')->store("images");
        $nomgreArchivo = '/images/' . basename($ruta);
        $result->imageURL = $nomgreArchivo;

        $result->titulo = $form['title'];
        $result->precio = $form['price'];
        $result->description = $form['description'];
        $result->display_size=$form['display_size'];
        $result->camara=$form['camara'];
        $result->RAM=$form['RAM'];
        $result->OS=$form['OS'];
        $result->category=$form['category'];
        $result->save();
        return redirect("exito/0");
    }

    public function destroy(Request $form)
    {
        $id = $form['id'];
        $product = Product::find($id);
        $product->delete();
        return redirect("exito/-1");
    }

    public function detail($id)
    {
        $result = Product::find($id);
        if ($result == null) {
            return view('notFound');
        }
        $vac = compact('result');
        return view('productDetails', $vac);
    }

    function list() {
        $uri = \Request::getRequestUri();
        if ($uri == '/celulares') {
            $result = Product::where('category', '=', 'Smartphone')->get();
        }else {
          $result = Product::where('category', '=', 'Laptop')->get();
        }
        //$result = Product::all();
        $vac = compact('result');
        return view(ltrim($uri, $uri[0]), $vac);
    }

    public function abm()
    {
        if (Auth::user()->role == "ADMIN") {
            return view('abmProducts');
        } else {
            return "Forbbiden";
        }
    }

}
