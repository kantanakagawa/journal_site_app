@extends('layouts.main')
@section('title', '論文一覧')
@section('content')
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>

    <button type="button" onclick="location.href='{{ route('articles.create') }}' ">新規論文投稿</button>
@endsection
