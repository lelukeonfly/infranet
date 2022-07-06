@extends('layouts.news')

@section('title', 'News')

@section('news')
    @forelse ($news as $post)
        <a href="/news/{{ $post->slug }}">
            <div class="m-2 bg-dark">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
            </div>
        </a>
    @empty
        No news found
    @endforelse
@endsection
