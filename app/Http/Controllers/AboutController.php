<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class AboutController extends Controller
{
  public function index(){
    return response()->view('about');
  }
}
