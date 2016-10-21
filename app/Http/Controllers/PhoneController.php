<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class PhoneController extends Controller
{
    public function ear(){
      return response()->view('Phone',['type'=>'ear']);
    }

    public function head(){
      return response()->view('Phone',['type'=>'head']);
    }
}
