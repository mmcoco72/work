@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
           <h2>日記一覧</h2>
           <div class='diaries'>
                @foreach($diaries as $diary)   
                   <div class='diary'>
                        <h3 class='title'>
                           <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
                        </h3>
                       <p class='body'>{{ $diary->body }}</p>
                   </div>
                @endforeach
           </div>
           <div class='paginate'>
               {{ $diaries->links() }}
           </div>
        <div class="back">
            <a href="/categories">戻る</a>
        </div>
@endsection