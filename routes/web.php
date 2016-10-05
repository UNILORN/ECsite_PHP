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

use Illuminate\Database\Eloquent\Model;
use App\MST_ITEM;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('toppage');
});

Route::get('/item/{type}/{id}', function($type,$id){
    $data = MST_ITEM::select('name','imageurl','price')
                          ->where('type',$type)
                          ->where('ITEM_ID',$id)
                          ->get()
                          ->toArray();
    return view('itempage')->with("data",$data[0]);
});

Route::get('/items', function(){
    return response() -> json(MST_ITEM::all());
});

Route::get('/items/{name}', function($name){
    return response() -> json(MST_ITEM::where('name','like','%'.$name.'%')->get()->toArray());
});
