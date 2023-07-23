@extends('layout.timer-only')
@section('content')
    <div class="text-center" id="timerDiv">
        @livewire('engine', key(time()))
    </div>
@endsection