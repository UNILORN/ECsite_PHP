<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function index(){
      return view('cart');
    }
    public function store(Request $request){
      $cartitem = session()->get('cart');
      $additem  = $request->input('id');
      $flug = 0;
      if(!empty($cartitem)){
        foreach($cartitem as $key => $value){
            if($value['itemid'] == $additem){
              $cartitem[$key]['num'] += 1;
              $flug = 1;
            }
        }
      }
      if($flug == 0){
        $cartitem[] = [
          'itemid' => $additem,
          'num' => 1
        ];
      }
      session()->put('cart',$cartitem);
      return redirect('/cart');
    }

    public function deleteitem($id){
      $cartlist = session()->get('cart',[]);
      foreach ($cartlist as $key => $value) {
        if($value['itemid'] == $id){
          $itemid = $key;
        }
      }
      session()->forget("cart.$itemid");
      return redirect('cart');
    }
}
