@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
            <h2>日記一覧</h2>
            [<a href='/diaries/create'>新規作成</a>]
            <div class='diaries'>
                @foreach($diaries as $diary)   
                    <div class='diary'>
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
                    <script>
                        function deleteCheck(){
                            if (confirm("本当に削除してよろしいですか？")) {
                                return true;
                                } else {
                                return false;
                            }
                        }
                    </script>
                @endforeach
            </div>
            <div class='paginate'>
               {{ $diaries->links() }}
            </div>
        <div class="back">
            <a href="/categories">戻る</a>
        </div>
@endsection