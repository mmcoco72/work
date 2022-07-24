@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2>感情作成</h2>
        <form action="/diaries/create" method="POST">
            @csrf
            <div class="emotion_name">
                <h3>感情名</h3>
                <input type="text" name="emotion[name]" placeholder="ワクワク" value="{{ old('emotion.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('emotion.name') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/diaries/create">日記作成に戻る</a>]</div>
@endsection

