@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h3 class="title">
            {{ $post->title }}
        </h3>
        <div class="content">
            <div class="content__post">
                <h3>コンテンツ</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
@endsection