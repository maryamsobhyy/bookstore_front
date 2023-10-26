<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopcontroller extends Controller
{
    //
    public function index (){
        return view('front.pages.shop.index');
    }
    public function show (){
        return view('front.pages.shop.show');
    }
}
