@extends('layouts.root')

@section('title', 'Home')

@section('container1')
    {{ __('company') }}
    {{ __('container1.body') }}
    {{ __('container1.section1') }}
    {{ __('container1.section2') }}
    {{ __('container1.section3') }}
@endsection

@section('container2')
    {{ __('container2.title') }}
    {{ __('container2.body') }}
    {{ __('container2.municip') }}
    {{ __('container2.frac') }}
@endsection

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
