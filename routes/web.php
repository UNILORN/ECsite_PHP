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

Route::get('/', function() {
  return view('toppage');
});

Route::get('/headphone','HeadphoneController@index');
Route::get('/earphone','EarphoneController@index');
Route::get('/about' ,'AboutController@index');

Route::get('/item/{id}','ItemController@show');

Route::get('/api/items','API_ItemController@index');
Route::get('/api/items/{name}','API_ItemController@show');
