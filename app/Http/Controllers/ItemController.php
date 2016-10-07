<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\MST_ITEM;
use App\Models\MST_COMPANY;

class ItemController extends Controller
{

  public function index(){

  }

  public function show($id){
    $data = MST_ITEM::where('ITEM_ID',$id)
                ->with('company')
                ->get()->toArray();

    return view('itempage')->with(["data" => $data[0]]);
  }
}
