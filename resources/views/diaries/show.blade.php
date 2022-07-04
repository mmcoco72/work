@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h3 class="title">
            {{ $diary->title }}
        </h3>
        <div class="content">
            <div class="content__diary">
                <p>{{ $diary->body }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/diaries/{{ $diary->id }}/edit">編集</a>]</p>
        <div class="back">
            <a href="/diaries">戻る</a>
        </div>
@endsection