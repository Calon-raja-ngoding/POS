<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SalesControlle extends Controller
{
    public function index(){
        return view('sales');
    }
}
