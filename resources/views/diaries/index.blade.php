@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <h2 class="title">日記一覧</h2>
        <div class="contents">
            [<a href='/diaries/create'>日記の新規作成</a>]
            <form action="/diaries/search" method="GET">
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
            <div class="diaries">
                @foreach($diaries as $diary)   
                    <div class="diary" data-emotions_array[]='[ "{{ $emotion->id }}" ]'>
                        <h3 class="contents__title">
                            <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
                        </h3>
                        <p class="contents__emotion">
                            @foreach($diary->emotions as $emotion)
                                <p>{{ $emotion->name }}：{{ $emotion->pivot->degree }}</p>
                            @endforeach
                        </p>
                        <p class="contents__body">{{ $diary->body }}</p>
                    </div>
                    <p class="date">{{ $diary->created_at }}</p>
                    <form action="/diaries/{{ $diary->id }}" id="form_delete" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="return deleteCheck();">削除</button>
                    </form>
                @endforeach
            </div>
            <div class="paginate">
               {{ $diaries->links() }}
            </div>
            <div class="back">
                <a href="/">戻る</a>
            </div>
        </div>
@endsection