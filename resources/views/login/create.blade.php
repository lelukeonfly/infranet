@extends('layouts.root')

@section('title', 'login')

@section('body')
    <section>
        <h1 class="fs-lg text-center m-5">Login</h1>
        <div class="w-50 m-auto">
            <form action="/login" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                        placeholder="Email" value="{{ old('email') }}">
                    <div>
                        <small id="emailHelpId" class="form-text text-muted">Wir teilen Ihre E-Mail mit niemandem</small>
                    </div>
                </div>


                <div class="mb-3">

                    <label for="password" class="form-label">Password</label>

                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">

                </div>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                @error('login')
                    <small id="helpId" class="form-text text-danger">
                        {{ $message }}
                    </small>
                @enderror

                <button type="submit" class="btn btn-primary float-end">Login</button>
            </form>
        </div>
    </section>
@endsection
