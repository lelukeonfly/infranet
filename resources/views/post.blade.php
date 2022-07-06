@extends('layouts.post')

@section('title')
    Post: {{ $post->title }}
@endsection

@section('post')
    <h1>
        {{ $post->title }}
    </h1>

    <p>
        {{ $post->created_at }}
    </p>

    <p>
        {{ $post->content }}
    </p>
@endsection
