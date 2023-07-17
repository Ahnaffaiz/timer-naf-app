<?php

namespace App\Http\Livewire;

use App\Models\TimerCountdown;
use Livewire\Component;

class Timer extends Component
{
    public $time;

    public function mount()
    {
        $this->time = TimerCountdown::first();
    }
    public function render()
    {
        if($this->time->is_play == true) {
            if($this->time->is_countdown == true && $this->time->time > 0) {
                $this->time->update([
                    'time' => $this->time->time -= 1
                ]);
            } elseif($this->time->is_countdown == false && $this->time->time < $this->time->duration) {
                $this->time->update([
                    'time' => $this->time->time += 1
                ]);
            } else {
                $this->time->update([
                    'is_play' => false
                ]);
            }
        }

        return view('livewire.timer');
    }
}
