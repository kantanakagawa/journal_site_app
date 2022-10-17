@extends('layouts.main')
@section('title', '論文詳細')
@section('content')
    <h1>論文詳細</h1>
    <form>
        <div>
            <p for="title">タイトル:{{ $article->title }}</p>
        </div>
        <div>
            <p>{{ $article->body }}</p>
        </div>
    </form>
    <div class = "button-group">
    <form action="{{route('articles.index')}}">
        <button type="submit">一覧画面</button>
    </form>
    <form action="{{route('articles.edit', $article)}}">
        <button type="submit">編集する</button>
    </form>
    <form action="{{ route('articles.destroy', $article) }}" method="post" name="form1" style="display: inline">
        @csrf
        @method('delete')
        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
    </form>
    </div>
@endsection
