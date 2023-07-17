<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function timer()
    {
        return view('timer');
    }

    public function setting()
    {
        return view('setting');
    }
}
