<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category($name){
        return view('category', ['category'=>$name]);
    }
}
