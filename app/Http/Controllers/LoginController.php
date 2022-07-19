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

        //if the authentication fails user will be sent back to login page with error message
        if (!auth()->attempt($credentials)) {
            return back()
                ->withInput()
                ->withErrors(['login' => 'Email or Password authentication failed']);
        }


        //if authentication doesnt fail:
        session()->regenerate();
        return redirect()->route('home', app()->getLocale())->with('success', 'Welcome back <strong>' . auth()->user()['name'] . '</strong>!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home', app()->getLocale())->with('success', 'successfully logged out');
    }
}
