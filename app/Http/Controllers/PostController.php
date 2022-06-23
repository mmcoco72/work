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
}
