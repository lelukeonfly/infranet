@extends('layouts.news')

@section('title', 'News')

@section('news')
    @forelse ($news as $article)
        {{-- <a href="/news/{{ $article->{'slug_'.app()->getLocale()} }}"> --}}
        {{-- <a href="/{{ app()->getLocale() }}/news/{{ $article->id }}"> --}}

        <a href="{{ route('article', [app()->getLocale(), $article->{'slug_' . app()->getLocale()}]) }}">
            <div class="m-2 bg-dark">
                <h1>{{ $article->{'title_' . app()->getLocale()} }}</h1>
                <p>{{ $article->{'content_' . app()->getLocale()} }}</p>
            </div>
        </a>
    @empty
        No news found
    @endforelse
    <a href="{{ route('home', [$lang]) }}">back</a>
@endsection
