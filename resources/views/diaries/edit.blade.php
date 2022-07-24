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
                    @if($diary->emotions->contains('id', $emotion->id))<!--感情のデフォルト表示-->
                        <input type="checkbox" name="emotions_array[]" value="{{ $emotion->id }}" checked/>
                        <label for="">
                            {{ $emotion->name }}
                        </label>
                        @foreach($diary->emotions as $diary_emotion)<!--pivot使用-->
                            @if($emotion->name == $diary_emotion->name)
                            <select name="emotion_degree[]"><!--感情の度合いのデフォルト表示-->
                                <option value=0 {{ $diary_emotion->pivot->degree == 0 ? "selected" : "" }} >未選択</option>
                                <option value=1 {{ $diary_emotion->pivot->degree == 1 ? "selected" : "" }} >1</option>
                                <option value=2 {{ $diary_emotion->pivot->degree == 2 ? "selected" : "" }} >2</option>
                                <option value=3 {{ $diary_emotion->pivot->degree == 3 ? "selected" : "" }} >3</option>
                                <option value=4 {{ $diary_emotion->pivot->degree == 4 ? "selected" : "" }} >4</option>
                                <option value=5 {{ $diary_emotion->pivot->degree == 5 ? "selected" : "" }} >5</option>
                            </select> 
                            @endif
                        @endforeach
                    @else
                        <label>
                            <input type="checkbox" name="emotions_array[]" value="{{ $emotion->id }}">
                                {{ $emotion->name }}
                            </input>
                        </label>
                        <select name="emotion_degree[]">
                            <option value=0 selected>未選択</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                    @endif
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
            [<a href="/diaries{{$diary->id}}">戻る</a>]
        </div>
@endsection

