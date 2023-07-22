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

    public function timer()
    {
        return view('timer');
    }

    public function timerMulti(TimerCountdown $timerCountdown)
    {
        return view('timer-multi', compact('timerCountdown'));
    }

    public function setting()
    {
        return view('setting');
    }

    public function settingMulti(TimerCountdown $timerCountdown)
    {
        return view('setting-multi', compact('timerCountdown'));
    }

    public function preview()
    {
        return view('preview');
    }

    public function previewMulti(TimerCountdown $timerCountdown)
    {
        return view('preview-multi', compact('timerCountdown'));
    }
}
