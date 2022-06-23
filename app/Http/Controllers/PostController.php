<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

// Post一覧を表示

class PostController extends Controller
{   
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}