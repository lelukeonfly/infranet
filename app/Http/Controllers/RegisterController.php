<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // return request();
        User::create(request()->validate([
            'name' => ['required', 'min:2', 'max:255',],
            'username' => ['required', 'min:5', 'max:255', 'unique:users,username',],
            // or -> 'username' => ['required', 'min:5', 'max:255', Role::unique('users','username'),],
            'email' => ['required', 'email', 'max:255', 'unique:users,email',],
            'password' => ['required', 'min:8', 'max:255', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/'],
            'provider' => ['required', 'min:2', 'max:127'],
        ]));

        return redirect()->route('home',app()->getLocale())->with('registered', 'Thank you for registering <strong>'.request()['name'].'</strong>! You will be verified by the Admin soon.');
    }
}
