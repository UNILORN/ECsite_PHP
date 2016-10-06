<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\MST_ITEM;
use App\Models\MST_COMPANY;

class API_ItemController extends Controller
{
    public function index(){
      return response() -> json(MST_ITEM::all());
    }

    public function show($name){
      $company = MST_COMPANY::where('name',$name)
                ->get()->toArray();

      $itemlist = MST_ITEM::where('name','like','%'.$name.'%')
                ->CompanyID($company[0]['COMPANY_ID'])
                ->get()
                ->toArray();
      return response()->json($itemlist);
    }
}
