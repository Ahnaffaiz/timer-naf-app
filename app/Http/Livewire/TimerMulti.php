<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Redis;

class TimerMulti extends Component
{
    public $timerCountdown, $time;

    public function mount() {
        $this->timerKey = 'timer:' . $this->timerCountdown;
        if (!Redis::exists($this->timerKey)){
            Redis::hMset($this->timerKey, [
                'time' => 0,
                'is_play' => false,
                'is_countdown' => false,
                'duration' => 0
            ]);
        }
    }
    public function render()
    {
        $this->time = Redis::hget($this->timerKey, 'time');
        return view('livewire.timer-multi');
    }
}
