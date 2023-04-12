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
    $priceQuery = $request->input('price_query');

    $products = Product::query();

    // filter by title search query
    if ($query) {
        $products->where('title', 'like', "%$query%");
    }

    // filter by price range query
    if ($priceQuery) {
        $priceRange = explode(' - ', str_replace('$', '', $priceQuery));
        if (count($priceRange) == 2) {
            $minPrice = (int) $priceRange[0];
            $maxPrice = (int) $priceRange[1];
            $products->where('price', '>=', $minPrice)->where('price', '<=', $maxPrice);
        }
    }

    $products = $products->paginate(10);
    return view('shop', compact('products', 'query', 'priceQuery'));
}



}
