@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <div class="body">
            <div class="menu">
                <h4 class='topictop'>
                    <a href="/diaries">日記一覧</a>
                </h4>
                <p>作成</p>
                <h4 class='topictop'>タスク一覧</h4>
                <p>作成</p>
                <h4 class='topictop'>
                    <a href="/posts">コミュニティ</a>
                </h4>
            </div>
            <div class="calendar">
                <div id='calendar'></div>
            </div>
        </div>
@endsection