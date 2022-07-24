@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <div class="emotion_name">
            <h3>感情名</h3>
            <p>{{ $emotion->name }}</p>
        </div>
        [<a href='/emotions/edit'>感情名の編集</a>]</br>
        <form action="/emotions/{{ $emotion->id }}" id="form_{{ $emotion->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onClick="return deleteCheck()">削除</button>
        </form>
        <div class="back">[<a href="/diaries/create">日記作成に戻る</a>]</div>
@endsection