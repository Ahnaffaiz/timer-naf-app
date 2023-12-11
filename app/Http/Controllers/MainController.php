<?php

namespace App\Http\Controllers;
use App\Models\TimerCountdown;

class MainController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function engine()
    {
        return view('engine');
    }

    public function engineView()
    {
        return view('engine-view');
    }

    public function timer()
    {
        return view('timer');
    }

    public function timerMulti($timerCountdown)
    {
        return view('timer-multi', compact('timerCountdown'));
    }

    public function setting()
    {
        return view('setting');
    }

    public function settingMulti($timerCountdown)
    {
        return view('setting-multi', compact('timerCountdown'));
    }

    public function preview()
    {
        return view('preview');
    }

    public function previewMulti($timerCountdown)
    {
        return view('preview-multi', compact('timerCountdown'));
    }
}
