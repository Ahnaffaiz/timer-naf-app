<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TimerCountdown;

class Engine extends Component
{
    public function render()
    {
        $timerCountdowns = TimerCountdown::where('is_play', true)->get();
        foreach ($timerCountdowns as $timerCountdown) {
            if($timerCountdown->is_countdown == true && $timerCountdown->time > 0) {
                $timerCountdown->update([
                    'time' => $timerCountdown->time -= 1
                ]);
            } elseif($timerCountdown->is_countdown == false) {
                $timerCountdown->update([
                    'time' => $timerCountdown->time += 1
                ]);
            } else {
                $timerCountdown->update([
                    'is_play' => false
                ]);
            }
        }

        return view('livewire.engine');
    }
}
