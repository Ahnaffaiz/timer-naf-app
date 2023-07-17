<?php

namespace App\Http\Livewire;

use App\Models\TimerCountdown;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Setting extends Component
{
    use LivewireAlert;
    public $time;

    public function mount() {
        $time = TimerCountdown::first();
        $this->time = $time;
    }

    public function render()
    {
        return view('livewire.setting');
    }

    public function play()
    {
        if($this->time->time > 0 && $this->time->is_countdown == true) {
            $this->time->update([
                'is_play' => true,
            ]);
        } elseif($this->time->is_countdown == false) {
            $this->time->update([
                'is_play' => true,
            ]);
        } else {
            $this->alert('warning', 'Silahkan Atur Waktu Terlebih Dahulu',['position'=>'center','toast'=>false]);
        }
    }

    public function pause()
    {
        $this->time->update([
            'is_play' => false,
        ]);
    }

    public function resetTime()
    {
        if($this->time->countdown == true) {
            $this->time->update([
                'time' => $this->time->duration,
                'is_play' => false,
            ]);
        } else {
            $this->time->update([
                'time' => 0,
                'is_play' => false,
            ]);
        }
    }

    public function setDuration($duration)
    {
        if($this->time->is_play == true) {
            $this->alert('warning', 'Tidak Dapat Mengubah Durasi Saat Waktu Berjalan',['position'=>'center','toast'=>false]);
        } else {
            $this->time->update([
                'duration' => $duration,
                'time' => $duration,
            ]);
        }
    }

    public function setCountdown()
    {
        if($this->time->is_play != true) {
            if($this->time->is_countdown == true) {
                $this->time->update([
                    'is_countdown' => false,
                    'time' => 0,
                ]);
            } else {
                $this->time->update([
                    'is_countdown' => true,
                    'time' => $this->time->duration,
                ]);
            }
        } else {
            $this->alert('warning', 'Tidak Dapat Mengubah Countdown Saat Waktu Berjalan',['position'=>'center','toast'=>false]);
        }
    }
}
