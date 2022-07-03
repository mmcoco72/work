@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2>日記作成</h2>
        <form action="/diaries" method="POST">
            @csrf
            <div class="title">
                <h3>タイトル</h3>
                <input type="text" name="diary[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h3>コンテンツ</h3>
                <textarea name="diary[body]" placeholder="面白いアニメを見つけた。"/></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/diaries">戻る</a>]</div>
@endsection

