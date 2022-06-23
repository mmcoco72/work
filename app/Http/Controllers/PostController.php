<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Http\Requests\PostRequest;

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
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function edit(Post $post)
    {
<<<<<<< HEAD
    return view('posts/edit')->with(['post' => $post]);
=======
        return view('posts/edit')->with(['post' => $post]);
>>>>>>> ea97cf20c43b84c85b46d6424bf965dba1d57063
    }
    
    public function update(PostRequest $request, Post $post)
    {
<<<<<<< HEAD
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
=======
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
>>>>>>> ea97cf20c43b84c85b46d6424bf965dba1d57063
    }
}
