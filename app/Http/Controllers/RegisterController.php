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
            'username' => ['required', 'min:2', 'max:255',],
            'email' => ['required', 'email', 'max:255',],
            'password' => ['required', 'min:8', 'max:255',],
        ]));

        return "done";
    }
}
