@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2 class="title">日記編集</h2>
        <div class="content">
            <form action="/diaries/{{ $diary->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="content__title">
                    <h3>タイトル</h3>
                    <input type='text' name='diary[title]' value="{{ $diary->title }}"/>
                    <p class="title_error" style="color:red">{{ $errors->first('diary.title') }}</p>
                </div>
                <div class="emotion">
                <h3>感情選択</h3>
                @foreach($emotions as $emotion)
                    @if($diary->emotions->contains('id', $emotion->id))
                        <input type="checkbox" name="emotions_array[name]" value="{{ $emotion->id }}" checked/>
                    @else
                        <input type="checkbox" name="emotions_array[name]" value="{{ $emotion->id }}"/>
                    @endif
                    <label for="">
                        {{ $emotion->name }}
                    </label>
                @endforeach
                </div>
                <div class='content__body'>
                    <h3>コンテンツ</h3>
                    <input type='text' name='diary[body]' value="{{ $diary->body }}"/>
                    <p class="body__error" style="color:red">{{ $errors->first('diary.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        <div class="back">
            [<a href="/diaries">戻る</a>]
        </div>
@endsection

