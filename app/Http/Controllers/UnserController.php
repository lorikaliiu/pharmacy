<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnserController extends Controller
{
    public function Unserview(){
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        $coronaNews = DB::table('news')->where('category', 'Corona Pandemie')->get();
        return view('Unser',compact('categories','coronaNews'));
    }
}
