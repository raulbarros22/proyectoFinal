<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Cart;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'surname' => ['required', 'string', 'min:2'],
            'telefono'=> ['required', 'string', 'min:10'],
            'dni'=>['required','numeric','min:8'],
            'address'=>['required','string'],
            // 'avatar'=>  ['file'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
      // $ruta=$data->file('avatar')->store("public");
      // $nomgreArchivo=basename($ruta);

      $cart = Cart::create([
        'total_price' => 0,
        'subtotal' => 0,
        'discounts' => 0,
        'shipping_cost' => 0
      ]);
      $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telefono'=>$data['telefono'],
            'dni'=>$data['dni'],
            'address'=>$data['address'],
            'cart_id'=>$cart->getAttributes()['id']
            // 'avatar'=>basename($data->file('avatar')->store('public')),
        ]);
        return $user;
    }
}
