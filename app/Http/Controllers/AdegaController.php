<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdegaController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function shoppingCart(){
        return view('shoppingCart');
    }


}
