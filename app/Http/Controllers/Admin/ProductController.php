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
            'category'=>'required',
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
        $product->cat_id=$request->category;
        $product->img = str_replace('public', '', $imgPath);
        $product->detail = $request->detail;
        $product->save();
        $request->file('img')->move('images',$imgPath);
        return redirect('adminhome')->with('success','Beitrag wurde hinzugefügt');

        }

        public function updateProduct(Request $request, $id) {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'img' => 'image',
                'detail' => 'required|string',
                'category' => 'required|exists:categories,id'
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        
            $product = Product::find($id);
        
            if (!$product) {
                return redirect()->back()->with('error', 'Product not found');
            }
        
            $product->title = $request->title;
            $product->price = $request->price;
            $product->detail = $request->detail;
            $product->cat_id = $request->category; // add this line to update the category ID
        
            if ($request->hasFile('img')) {
                $imgPath = $request->file('img')->store('public/images');
                $product->img = str_replace('public', '', $imgPath);
            }
        
            $product->save();
        
            return redirect()->route('adminhome', ['id' => $id])->with('success', 'Produkt erfolgreich aktualisiert');
        }
        
        public function destroy($id)
        {
            Product::where('id',$id)->delete();
            return redirect('adminhome')->with('success','Das Produkt wurde gelöscht');
        }
        
    }
