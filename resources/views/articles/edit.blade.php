@extends('layouts.main')
@section('title', '論文修正')
@section('content')
    <h1>投稿論文編集</h1>

    <form action="{{ route('articles.update', $article) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="title">論文タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old("title", $article->title) }}">
        </div>
        <div>
            <label for="body">本文:</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ old("body", $article->body) }}</textarea>
        </div>
        <div>
            <input type="submit" value="更新">
        </div>
    </form>

@endsection
