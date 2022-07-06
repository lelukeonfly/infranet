@extends('layouts.layout')

@section('title', 'Home')

@section('content')
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
