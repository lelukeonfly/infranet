@extends('layouts.root')

@section('title', 'Home')

@section('body')
    @include('partials.container1')
    @include('partials.container2')
    @include('partials.container3')
    @include('partials.container4')
    @include('partials.container5')
    @include('partials.container6')
@endsection

{{-- @section('providers')
    @forelse ($providers as $provider)
        <a href="{{ $provider->url }}">
            <img src="/storage/{{ $provider->img }}" alt="problems occured while loading the image" loading="lazy">
        </a>
    @empty
        No providers found
    @endforelse
@endsection --}}
