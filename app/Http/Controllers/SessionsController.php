<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create()
    {
        return view('login.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home', app()->getLocale())->with('success', 'successfully logged out');
    }
}
