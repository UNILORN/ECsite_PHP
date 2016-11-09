<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Response;
use Illuminate\Http\Reqest;
use Illuminate\Database\Eloquent\Model;
use App\Models\MST_ITEM;
use App\Models\MST_COMPANY;

Auth::routes();
Route::get('/', function() {
  return view('toppage');
});

Route::get('/headphone','PhoneController@head');
Route::get('/earphone','PhoneController@ear');
Route::get('/about' ,'AboutController@index');
Route::get('/cart','CartController@index');
Route::post('/cart','CartController@store');
Route::get('/cart/{id}','CartController@deleteitem');

Route::get('/item/{id}','ItemController@show');

Route::get('/api/items','API_ItemController@index');
Route::get('/api/items/cart','API_ItemController@cartitem');
Route::get('/api/items/type/{type}','API_ItemController@type');
Route::get('/api/items/{name}','API_ItemController@show');

Route::get('/home', 'HomeController@index');
