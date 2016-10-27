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
      $data = MST_ITEM::with('company')
          ->get();
      return response() -> json($data);
    }

    public function type($type){
      return response() -> json(MST_ITEM::where('type',$type)->get());
    }

    public function show($name){
      $company = MST_COMPANY::where('name',$name)
                ->get()->toArray();

      if(empty($company[0])){ $company[0]['COMPANY_ID'] = -1; }

      $itemlist = MST_ITEM::where('name','like','%'.$name.'%')
                ->CompanyID($company[0]['COMPANY_ID'])
                ->get()
                ->toArray();
      return response()->json($itemlist);
    }

    public function cartitem(){
      $cartitem = session()->get('cart',[]);
      $itemlistid = [];
      foreach($cartitem as $value){
        $itemlistid[] = $value['itemid'];
      }
      $responselist = MST_ITEM::whereIn('ITEM_ID',$itemlistid)
        ->with('company')
        ->get()
        ->toArray();

      foreach($responselist as $reskey => $resvalue){
        foreach ($cartitem as $cartkey => $cartvalue) {
          if($resvalue['ITEM_ID'] == $cartvalue['itemid']){
            $responselist[$reskey]['pricenum'] = $cartvalue['num'];
          }
        }
      }
      return response()->json($responselist);
    }
}
