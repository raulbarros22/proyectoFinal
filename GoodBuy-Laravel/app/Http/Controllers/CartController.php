<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cart;

class CartController extends Controller
{
    public function search(){
        $user = Auth::user();
        $result=Cart::find($user->cart_id);
        $vac=compact('result');

        return view('cart',$vac);
      }

      public function addToCart($id){
        $user = Auth::user();
        $cart = Cart::find($user->cart_id);
        $cart->productos()->attach($id);
        return redirect('carrito');
      }

      public static function determineTotal($productos){
        $total = 0;
        foreach($productos as $product){
            $total = $total + $product->precio;
        }
        return $total;
    }

    public function deleteFromCart($id){
      $user = Auth::user();
      $cart = Cart::find($user->cart_id);
      $cart->productos()->detach($id);
      return redirect('carrito');
    }

    public function finishOrder(){
      $user = Auth::user();
      $cart = Cart::find($user->cart_id);
      $cart->productos()->detach();
      return view('confirmacion');
    }
}
