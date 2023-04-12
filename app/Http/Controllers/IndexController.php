<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexview(){
        $products = Product::all();
        return view('index',compact('products'));
    }
}
