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
        <div class="back">
            <a href="/posts">戻る</a>
        </div>
@endsection