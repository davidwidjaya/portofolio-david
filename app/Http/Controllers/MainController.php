<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home(Request $request)
    {
        return view('page.home');
    }
    function profile(Request $request)
    {
        return view('page.profile');
    }
}
