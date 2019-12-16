<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $guarded=[];

    public function productos(){
        return $this->belongsToMany('App\Product', 'cart_product',
         'cart_id', 'product_id');
    }
}
