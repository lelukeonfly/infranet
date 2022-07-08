@extends('layouts.article')

@section('title')
    article: {{ $article->{'title_' . $lang} }}
@endsection

@section('article')
    <h1>
        {{ $article->{'title_' . $lang} }}
    </h1>

    <p>
        {{ $article->created_at }}
    </p>

    <p>
        {!! $article->{'content_' . $lang} !!}
    </p>
    <a href="{{ route('news', [$lang]) }}">back</a>
@endsection
