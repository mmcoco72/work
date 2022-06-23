@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2 class="投稿編集"></h2>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="content__title">
                    <h3>タイトル</h3>
                    <input type='text' name='post[title]' value="{{ $post->title }}"/>
                </div>
                <div class='content__body'>
                    <h3>コンテンツ</h3>
                    <input type='text' name='post[body]' value="{{ $post->body }}"/>
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
@endsection