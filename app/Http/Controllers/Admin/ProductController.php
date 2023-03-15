<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function Product(){

        return view('admin.product');
    }
    
    public function addProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'img' => 'required|image',
            'detail' => 'required|string'
        ]);
     
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
    
        $imgPath = $request->file('img')->store('public/images');
    
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->img = str_replace('public', '', $imgPath);
        $product->detail = $request->detail;
        $product->save();
        $request->file('img')->move('images',$imgPath);
        return redirect('ProductsAdmin')->with('success','Data has been added');
        }
    }
