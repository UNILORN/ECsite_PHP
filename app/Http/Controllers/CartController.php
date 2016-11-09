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
        $cart = new \App\Service\CartService();
        $cart->addItem($request->input('id'));
        return redirect('/cart');
    }

    public function deleteitem($id){
        $cart = new \App\Service\CartService();
        $cart->deleteItem($id);

      return redirect('cart');
    }
}
