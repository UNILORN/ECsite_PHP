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
use App\MST_ITEM;
use App\MST_COMPANY;

Route::get('/', function() {
  return view('toppage');
});

Route::get('/headphone',function(){
  return view('headphone');
});
Route::get('/earphone',function(){
  return view('earphone');
});
Route::get('/about' ,function(){
  return view('about');
});

Route::get('/item/{type}/{id}', function($type,$id){
  $data = MST_ITEM::select('name','imageurl','price')
                        ->where('type',$type)
                        ->where('ITEM_ID',$id)
                        ->get()
                        ->toArray();
  return view('itempage')->with("data",$data[0]);
});

Route::get('/api/items', function(){
  return response() -> json(MST_ITEM::all());
});

Route::get('/api/items/{name}', function($name){
  $company = MST_COMPANY::where('name',$name)
            ->get()
            ->toArray();
  if(empty($company[0]["COMPANY_ID"])){ $company[0]["COMPANY_ID"] = -1; }
  $itemlist = MST_ITEM::where('name','like','%'.$name.'%')
            ->orWhere('COMPANY_ID',$company[0]["COMPANY_ID"])
            ->get()
            ->toArray();
  return response()->json($itemlist);
});
