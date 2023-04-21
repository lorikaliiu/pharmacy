<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class RatgeberController extends Controller
{
    public function ratgeberview(){
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        $products = Product::orderBy('title')->paginate(3);
        $coronaNews = DB::table('news')->where('category', 'Corona Pandemie')->get();
        return view('ratgeber',compact('categories','products','coronaNews'));
    }
}
