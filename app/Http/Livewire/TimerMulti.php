<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimerMulti extends Component
{
    public $timerCountdown;

    public function render()
    {
        return view('livewire.timer-multi');
    }
}
