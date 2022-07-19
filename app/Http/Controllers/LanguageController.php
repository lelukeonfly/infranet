<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class LanguageController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        return $agent->languages()[0];
    }
}
