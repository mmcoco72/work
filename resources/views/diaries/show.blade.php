@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h3 class="title">
            {{ $diary->title }}
        </h3>
        <p class="emotion">
            @foreach($diary->emotions as $diary_emotion)
                <p>{{ $diary_emotion->name }}：{{ $diary_emotion->pivot->degree }}</p>
            @endforeach
        </p>
        <div class="content">
            <div class="content__diary">
                <p>{{ $diary->body }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/diaries/{{ $diary->id }}/edit">編集</a>]</p>
        <form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onClick="return deleteCheck()">削除</button>
        </form>
        <div class="back">
            <a href="/diaries">戻る</a>
        </div>
@endsection