<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        //creates the user and validates the inputs first
        $user = User::create(request()->validate([
            'name' => ['required', 'min:2', 'max:255',],
            'username' => ['required', 'min:5', 'max:255', Rule::unique('users','username'),],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email'),],
            'password' => ['required', 'min:8', 'max:255', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/'],
            'provider' => ['required', 'min:2', 'max:127'],
        ]));

        //log user in after being registered
        //we don't because admin has to verify user
        //auth()->login($user);

        return redirect()->route('home',app()->getLocale())->with('success', 'Thank you for registering <strong>'.request()['name'].'</strong>! You will be verified by the Admin soon.');
    }
}
