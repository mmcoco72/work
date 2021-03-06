@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2 class="title">日記作成</h2>
        <div class="contents">
            <form action="/diaries" method="POST">
            @csrf
            <div class="contents__title">
                <h3>タイトル</h3>
                <input type="text" name="diary[title]" placeholder="タイトル" value="{{ old('diary.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('diary.title') }}</p>
            </div>
            <div class="contents__emotion">
                <h3>感情選択</h3>
                [<a href='/emotions/create'>感情の新規作成</a>]</br>
                @foreach($emotions as $emotion)
                    <label>
                        <input type="checkbox" name="emotions_array[{{ $emotion->name }}]" value="{{ $emotion->id }}">
                            <a href="/emotions/{{ $emotion->id }}">{{ $emotion->name }}</a>
                        </input>
                    </label>
                    <select name="emotion_degree[]">//感情の度合いのデフォルト表示
                        <option value=0 selected>未選択</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                    </select> 
                @endforeach
            </div>
            <div class="contents__body">
                <h3>コンテンツ</h3>
                <textarea name="diary[body]" placeholder="面白いアニメを見つけた。" value="{{ old('diary.body') }}"/></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('diary.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
            </form>
            <div class="back">[<a href="/diaries">日記一覧に戻る</a>]</div>
        </div>
@endsection

