<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
  return view('index');
});
Route::get('/faq',function(){
  return view('faq');
});
Route::get('/contact',function(){
  return view('contact');
});
Route::get('/celulares',function(){
  return view('celulares');
});
Route::get('/carrito',function(){
  return view('cart');
});
Route::get('/profile',function(){
  return view('profile');
})->middleware('auth');
// Route::get('/profile','UserController@profile');
Route::post('/abmProducts','ProductController@search');
Route::get('/abmProducts',function(){
  return view('abmProducts');
});
Route::post('/agregar','ProductController@guardarArchivo');
