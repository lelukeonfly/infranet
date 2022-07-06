@extends('layouts.root')

@section('title', 'Home')

@section('news')
    @forelse ($news as $post)
        <a href="/news/{{ $post->slug }}">
            <div class="bg-dark">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
                <p>{{ $post->created_at }}</p>
            </div>
        </a>
    @empty
        No posts
    @endforelse
    <a href="/news">show all posts</a>
@endsection

@section('providers')
    @forelse ($providers as $provider)
    <a href="{{ $provider->url }}">
        <img src="storage/{{ $provider->img }}" alt="problems occured while loading the image">
    </a>
    @empty
        No providers found
    @endforelse
@endsection
