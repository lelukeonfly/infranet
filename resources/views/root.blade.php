@extends('layouts.root')

@section('title', 'Home')

@section('news')

    @forelse ($news as $article)
        {{ $article }}
        <div class="bg-dark">
            <h1>{{ $article->{'title_' . app()->getLocale()} }}</h1>
            <p>{{ $article->{'content_' . app()->getLocale()} }}</p>
            <p>{{ $article->created_at }}</p>
        </div>
        </a>
    @empty
        No articles
    @endforelse
    {{-- <a href="{{ app()->getLocale() }}news">show all articles</a> --}}
@endsection

@section('providers')
    @forelse ($providers as $provider)
        <a href="{{ $provider->url }}">
            <img src="/storage/{{ $provider->img }}" alt="problems occured while loading the image" loading="lazy">
        </a>
    @empty
        No providers found
    @endforelse
@endsection
