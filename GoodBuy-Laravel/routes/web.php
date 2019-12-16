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
Route::get('/carrito', 'CartController@search')->middleware('auth');
Route::get('/profile',function(){
  return view('profile');
})->middleware('auth');

Route::get('/abmProducts',function(){
  return view('abmProducts');
});
Route::get('/celulares', 'ProductController@list');
Route::get('/product/{id}', 'ProductController@detail');
Route::post('/addToCart/{id}', 'CartController@addToCart');
Route::post('/agregar','ProductController@store');
Route::get('/modificar','ProductController@search');
Route::get('/modificar/{id}','ProductController@modify');
Route::put('/modificar','ProductController@update');
Route::delete('/borrar','ProductController@destroy');
Route::get('/exito/{r}',function($r){
  $vac=compact('r');
  return view('exito',$vac);
});
