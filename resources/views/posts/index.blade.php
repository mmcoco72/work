@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <body>
           <h2>コミュニティ</h2>
           <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>{{ $post->title }}</h3>
                        <h3 class='body'>{{ $post->body }}</h3>
                    </div>
                @endforeach
           </div>
        </body>
@endsection