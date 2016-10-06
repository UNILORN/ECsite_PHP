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

Route::get('/item', function($id){
  $data = MST_ITEM::where('ITEM_ID',$id)
              ->with('company')
              ->get()->toArray();
  return view('itempage')->with(["data" => $data[0]]);
});

Route::get('/api/items', function(){
  return response() -> json(MST_ITEM::all());
});

Route::get('/api/items/{name}', function($name){
  $company = MST_COMPANY::where('name',$name)
            ->get();
  if(empty($company->COMPANY_ID)){ $company->COMPANY_ID = -1; }
  $itemlist = MST_ITEM::where('name','like','%'.$name.'%')
            ->orWhere('COMPANY_ID',$company->COMPANY_ID)
            ->get()
            ->toArray();
  return response()->json($itemlist);
});
