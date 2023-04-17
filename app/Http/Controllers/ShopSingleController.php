<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class ShopSingleController extends Controller
{
    public function shopsingleview(Request $request)
    {
        $id = $request->query('id');
        // $product = Product::find($id);

        if ($product = Product::find($id)) {
            // Access the $product properties here
            $title = $product->title;
            $img = $product->img;
            $price = $product->price;
            $detail = $product->detail;

            // ...
        } else {
            // Handle the case where $product is not an object, e.g. show an error message
            echo "Product not found.";
        }
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        $news = News::paginate(2);
        return view('shop-single', compact('categories','title','img','price','detail','news'));
    }
    
    
    
    
}
