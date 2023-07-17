<div wire:poll.1s>
    <h1 style="font-size: 75px">{{gmdate("i:s", $time->time)}}</h1>
    <div class="">
        <button class="btn {{$time?->duration == 60 ? 'btn-danger' : 'btn-outline-danger'}}" wire:click="setDuration(60)">01:00</button>
        <button class="btn {{$time?->duration == 90 ? 'btn-danger' : 'btn-outline-danger'}}" wire:click="setDuration(90)">01:30</button>
        <button class="btn {{$time?->duration == 120 ? 'btn-danger' : 'btn-outline-danger'}}" wire:click="setDuration(120)">02:00</button>
        <button class="btn {{$time?->duration == 30 ? 'btn-danger' : 'btn-outline-danger'}}" wire:click="setDuration(30)">Break (30s)</button>
        <button class="btn {{$time?->duration == 45 ? 'btn-danger' : 'btn-outline-danger'}}" wire:click="setDuration(45)">Break (45s)</button>
    </div>
    <div class="mt-2">
        <button class="btn {{$time?->is_countdown == true ? "btn-warning" : "btn-outline-warning"}}" wire:click="setCountdown">Count Down</button>
    </div>
    <div class="mt-5">
        @if ($time->is_play == true)    
            <button class="btn btn-primary" wire:click="pause">Pause</button>
        @else
            <button class="btn btn-primary" wire:click="play">Play</button>
        @endif
        <button class="btn btn-primary" wire:click="resetTime">Reset</button>
    </div>
</div>
