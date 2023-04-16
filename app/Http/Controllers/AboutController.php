<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function aboutview(){
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        return view('about',compact('categories'));
    }
}
