@extends('layouts.masterlayout.masterlayout')

@section('title')
    @yield('title')
@endsection

@section('body')
    @yield('post')
    <a href="/news">back</a>
@endsection
