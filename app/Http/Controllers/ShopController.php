<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shopview(){


        $products = Product::all();
        return view('shop',compact('products'));
    }
}
