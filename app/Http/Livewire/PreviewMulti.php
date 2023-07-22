<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PreviewMulti extends Component
{
    public $timerCountdown;

    public function render()
    {
        return view('livewire.preview-multi');
    }
}
