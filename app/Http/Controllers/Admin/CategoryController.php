<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'detail' => 'required|string'
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }


        $category = new Categories;
        $category->title = $request->titleCategory;
        $category->detail = $request->detailCategory;
        $category->save();
        return redirect('adminhome')->with('success','Beitrag wurde hinzugefügt');

        }
}
