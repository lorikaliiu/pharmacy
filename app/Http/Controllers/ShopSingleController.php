<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShopSingleController extends Controller
{
    public function shopsingleview(Request $request)
    {
        $id = $request->query('id');
        $product = Product::find($id);
   
        return view('shop-single', compact('product'));
    }
    
    
    
    
}
