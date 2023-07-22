<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimerMulti extends Component
{
    public $timerCountdown;

    public function render()
    {
        if($this->timerCountdown->is_play == true) {
            if($this->timerCountdown->is_countdown == true && $this->timerCountdown->time > 0) {
                $this->timerCountdown->update([
                    'time' => $this->timerCountdown->time -= 1
                ]);
            } elseif($this->timerCountdown->is_countdown == false && $this->timerCountdown->time < $this->timerCountdown->duration) {
                $this->timerCountdown->update([
                    'time' => $this->timerCountdown->time += 1
                ]);
            } else {
                $this->timerCountdown->update([
                    'is_play' => false
                ]);
            }
        }

        return view('livewire.timer-multi');
    }
}
