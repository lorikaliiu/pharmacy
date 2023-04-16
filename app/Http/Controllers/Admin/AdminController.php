<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminHome(Request $req){

        $query = $req->input('query');
        $products = Product::where('title', 'like', "%$query%")
                            ->paginate(10);
        $category = Categories::all();
        return view('admin.adminHome',compact('products','query','category'));
    }

}
