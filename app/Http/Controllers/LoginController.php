<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function create()
    {
        return view('login.create');
    }

    public function login()
    {
        //check login validation
        $credentials = request()->validate([
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);

        //when pass check login attempt and log in
        if (auth()->attempt($credentials)) {
            return redirect()->route('home', app()->getLocale())->with('success', 'Welcome back <strong>' . auth()->user()['name'].'</strong>!');
        }

        //when validation falis
        return back()
            ->withInput()
            ->withErrors(['login' => 'Email or Password authentication failed']);
        //other varaint
        // throw ValidationException::withMessages(['login' => 'Email or Password are not correct!']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home', app()->getLocale())->with('success', 'successfully logged out');
    }
}
