@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
           <h2>コミュニティ</h2>
           [<a href='/posts/create'>投稿作成</a>]
           <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h3 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h3>
                        <p class='category'>
                        @foreach($post->categories as $category)
                            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        @endforeach
                        </p>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
            </div>
           <div class='paginate'>
               {{ $posts->links() }}
           </div>
        </body>
        <div class="back">
            <a href="/">戻る</a>
        </div>
@endsection