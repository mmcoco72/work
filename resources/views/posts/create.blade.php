@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h3>タイトル</h3>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h3>コンテンツ</h3>
                <textarea name="post[body]" placeholder="面白いアニメを見つけた。"/></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
@endsection