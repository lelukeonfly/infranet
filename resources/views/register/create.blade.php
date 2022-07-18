@extends('layouts.masterlayout.masterlayout')

@section('title', 'register');

@section('body')
    <section>
        <h1 class="fs-lg text-center m-5">Register</h1>
        <div class="w-50 m-auto">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                        placeholder="Name">
                    @error('name')
                        <small id="helpId" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="username"
                        placeholder="Username">
                    @error('username')
                        <small id="helpId" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                        placeholder="Email">
                    @error('email')
                        <small id="helpId" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    <div>
                        <small id="emailHelpId" class="form-text text-muted">Wir teilen Ihre E-Mail mit niemandem</small>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    @error('password')
                        <small id="helpId" class="form-text text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                    <div>
                        {{-- <small id="helpId" class="form-text text-muted">forgot your password? link</small> --}}
                        <small id="helpId" class="form-text text-muted">Passwort muss mindestens...</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </form>
        </div>
    </section>
@endsection