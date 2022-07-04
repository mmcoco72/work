@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h3 class="title">
            {{ $post->title }}
        </h3>
        <p class="category">
            @foreach($post->categories as $category)
                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
            @endforeach
        </p>
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
        <div class="back">
            <a href="/posts">戻る</a>
        </div>
@endsection