@extends('layouts.main')
@section('title', '新規論文登録')
@section('content')
    <h1>新規論文登録</h1>

    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div>
            <label for="title">論文タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">

        </div>
        <div>
            <label for="body">本文:</label>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>

@endsection
