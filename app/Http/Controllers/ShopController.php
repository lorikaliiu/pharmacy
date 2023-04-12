<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shopview(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('title', 'like', "%$query%")
                            ->orWhere('price', 'like', "%$query%")
                            ->paginate(10);
        return view('shop', compact('products', 'query'));
    }

}
