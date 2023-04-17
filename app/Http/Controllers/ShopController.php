<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function shopview(Request $request)
{
    $id = $request->query('cat_id');
    $query = $request->input('query');
    $products = Product::orderBy('title')->where('title', 'like', "%$query%")
                            ->paginate(10);
    $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
    ->select('categories.id', DB::raw('MAX(categories.title) as title'))
    ->groupBy('categories.id')
    ->get();
    $news = News::paginate(2);
    return view('shop', compact('products', 'query','categories','news'));
}



}
