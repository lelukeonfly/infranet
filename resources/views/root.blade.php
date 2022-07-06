@extends('layouts.root')

@section('title', 'Home')

@section('news')
    @forelse ($news as $post)
        <a href="/news/{{ $post->slug }}">
            <div>
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
            </div>
        </a>
    @empty
        No posts
    @endforelse
    <a href="/news">show all posts</a>
@endsection

@section('providers')
    @forelse ($providers as $provider)
        <img src="storage/{{ $provider->img }}" alt="problems occured while loading the image">
    @empty
        No providers found
    @endforelse
@endsection
