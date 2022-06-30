<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request, Category $category)
    {
        $input_category = $request['category'];
        $input_posts = $request->posts_array;
        
        //categiresテーブルにデータ保存
        $category->fill($input_category)->save();
        
        //atttach()で中間テーブルに保存
        $category->posts()->attach($input_posts);
        return redirect('/posts');
    }
    
    public function index(Category $category)
    {
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
