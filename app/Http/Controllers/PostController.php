<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(News $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
