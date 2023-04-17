<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\News;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function indexview(){
        $products = Product::orderBy('title')->paginate(5);
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
                    ->select('categories.id', DB::raw('MAX(categories.title) as title'))
                    ->groupBy('categories.id')
                    ->get();
        $news = News::paginate(2);
        return view('index',compact('products','categories','news'));
    }
}
