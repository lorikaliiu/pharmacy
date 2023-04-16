<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function news(){
        $news = News::all();
        $categories = Categories::join('product', 'categories.id', '=', 'product.cat_id')
        ->select('categories.id', DB::raw('MAX(categories.title) as title'))
        ->groupBy('categories.id')
        ->get();
        return view('news',compact('categories','news'));
    }
    public function createNews(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category'=>'required',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'img' => 'required|image',
            'content' => 'required|string',
            'link' => 'nullable|url|max:255',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $imgPath = $request->file('img')->store('public/images/newsimg');

        $news  = new News ;
        $news ->title = $request->title;
        $news ->category=$request->category;
        $news->author = $request->author;
        $news ->img = str_replace('public', '', $imgPath);
        $news ->content = $request->content;
        $news ->link = $request->link;
        $news ->save();
        $request->file('img')->move('images/newsimg',$imgPath);

    return redirect()->route('adminhome')->with('success', 'News created successfully.');
}

}
