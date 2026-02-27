<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function foodBeverage(){
        return view('category', ['category'=>'Food & Beverage']);
    }
    public function beautyHealth(){
        return view('category', ['category'=>'Beauty & Health']);
    }
    public function homeCare(){
        return view('category', ['category'=>'Home Care']);
    }
    public function babyKid(){
        return view('category', ['category'=>'Baby & Kid']);
    }
}
