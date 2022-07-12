@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
            <h2>日記一覧</h2>
            [<a href='/diaries/create'>新規作成</a>]
            <form action="diaries" method="GET">
                <div class="search_area">
                    <span class="search_emotions_title">絞り込み検索</span>
                        @foreach($emotions as $emotion)
                            <label>
                                <input type="checkbox" name="emotions_array[{{ $emotion->name }}]" value="{{ $emotion->id }}" id={{ $emotion->name }}>
                                    {{ $emotion->name }}
                                </input>
                            </label>
                        @endforeach
                    <input type="submit"/>
                </div>
            </form>
            <div class="item_list">
                <div class="diaries">
                    @foreach($diaries as $diary)   
                        <div class='diary' data-emotions_array[name]='[ "{{ $emotion->id }}" ]'>
                            <h3 class='title'>
                                <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
                            </h3>
                            <p class="emotion">
                                @foreach($diary->emotions as $emotion)
                                    {{ $emotion->name }}
                                @endforeach
                            </p>
                            <p class='body'>{{ $diary->body }}</p>
                        </div>
                        <form action="/diaries/{{ $diary->id }}" id="form_delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onClick="return deleteCheck()">削除</button>
                        </form>
                    @endforeach
                </div>
            </div>
            <div class='paginate'>
               {{ $diaries->links() }}
            </div>
        <div class="back">
            <a href="/">戻る</a>
        </div>
@endsection