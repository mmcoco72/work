@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <body>
           <h2>コミュニティ</h2>
           [<a href='/posts/create'>投稿作成</a>]
           <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
           </div>
           <div class='paginate'>
               {{ $posts->links() }}
           </div>
        </body>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
@endsection