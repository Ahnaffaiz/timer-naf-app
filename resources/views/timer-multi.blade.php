@extends('layout.timer-only')
@section('content')
    <div class="text-center" id="timerDiv">
        @livewire('timer-multi', ['timerCountdown'=>$timerCountdown], key(time()))
    </div>
@endsection