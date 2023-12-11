<?php

namespace App\Http\Livewire;

use App\Models\TimerCountdown;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Redis;

class SettingMulti extends Component
{
    use LivewireAlert;
    public $timerKey, $time, $is_play, $is_countdown, $duration, $timerCountdown;

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
        $this->is_play = Redis::hget($this->timerKey, 'is_play');
        $this->is_countdown = Redis::hget($this->timerKey, 'is_countdown');
        $this->duration = Redis::hget($this->timerKey, 'duration');
        return view('livewire.setting-multi');
    }

    public function play()
    {
        if($this->time > 0 && $this->is_countdown == true) {
            Redis::hset($this->timerKey, 'is_play', true);
        } elseif($this->is_countdown == false) {
            Redis::hset($this->timerKey, 'is_play', true);
        } else {
            $this->alert('warning', 'Silahkan Atur Waktu Terlebih Dahulu',['position'=>'center','toast'=>false]);
        }
    }

    public function pause()
    {
        Redis::hset($this->timerKey, 'is_play', false);
    }

    public function resetTime()
    {
        if($this->is_play){
            $this->alert('warning', 'Tidak Dapat Mereset Saat Waktu Berjalan',['position'=>'center','toast'=>false]);
        }
        elseif($this->is_countdown) {
            $duration = Redis::hget($this->timerKey, 'duration');
            Redis::hset($this->timerKey, 'time', $duration);
            Redis::hset($this->timerKey, 'is_play', false);
        } else {
            Redis::hset($this->timerKey, 'time', 0);
            Redis::hset($this->timerKey, 'is_play', false);
        }
    }

    public function setDuration($duration)
    {
        if($this->is_play == true) {
            $this->alert('warning', 'Tidak Dapat Mengubah Durasi Saat Waktu Berjalan',['position'=>'center','toast'=>false]);
        } else {
            Redis::hset($this->timerKey, 'is_play', false);
            Redis::hset($this->timerKey, 'duration', $duration);
            Redis::hset($this->timerKey, 'time', $duration);
        }
    }

    public function setCountdown()
    {
        if(!$this->is_play) {
            if($this->is_countdown == true) {
                Redis::hset($this->timerKey, 'is_countdown', false);
                Redis::hset($this->timerKey, 'time', 0);
            } else {
                $duration = Redis::hget($this->timerKey, 'duration');
                Redis::hset($this->timerKey, 'time', $duration);
                Redis::hset($this->timerKey, 'is_countdown', true);
            }
        } else {
            $this->alert('warning', 'Tidak Dapat Mengubah Countdown Saat Waktu Berjalan',['position'=>'center','toast'=>false]);
        }
    }
}
