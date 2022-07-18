@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h3 class="title">
            {{ $diary->title }}
        </h3>
        <p class="emotion">
            @foreach($diary->emotions as $emotion)
                {{ $emotion->name }}
                    <p class="emotion_degree">感情を数値化：{{ $emotion->pivot->degree }}</p>
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
            <button type="submit" onClick="return deleteCheck();">削除</button>
        </form>
        <script>
            function deleteCheck(){
                if (confirm("本当に削除してよろしいですか？")) {
                    return true;
                    } else {
                    return false;
                    }
                }
        </script>
        <div class="back">
            <a href="/diaries">戻る</a>
        </div>
@endsection