<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;

class UserController extends Controller
{
    // public function profile(){
    //   $email=Auth::user()->email;
    //   $result=User::where('email','=',$email)->get();
    //   $vac=compact('result');
    //   return view('profile',$vac);
    // }

}
