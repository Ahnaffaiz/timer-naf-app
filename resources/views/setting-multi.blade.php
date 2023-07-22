@extends('layout.timer')
@section('content')
    <div class="text-center mt-5">
        @livewire('setting-multi', ['timerCountdown'=>$timerCountdown], key(time()))
    </div>
@endsection
@push('addon-style')
<style>
    body {
        background: #dddddd;
        margin: 24px;
    }

    .timer {
        font-family: sans-serif;
        display: inline-block;
        padding: 24px 32px;
        border-radius: 30px;
        background: white;
    }

    .timer__part {
        font-size: 36px;
        font-weight: bold;
    }

    .timer__btn {
        width: 60px;
        height: 60px;
        margin-left: 16px;
        border-radius: 50%;
        border: none;
        color: white;
        background: #8208e6;
        cursor: pointer;
    }

    .timer__btn--start {
        background: #00b84c;
    }

    .timer__btn--stop {
        background: #ff0256;
    }

    .timer__btn--reset {
        background: #067BC2;
    }

    .timer__btn--countdown-true {
        background: #8E9DCC;
    }

    .timer__btn--countdown-false {
        background: #7d84b2;
    }

    .time-select {
        margin-top: 24px;
    }

    .time-select__btn {
        width: 60px;
        height: 60px;
        margin-left: 16px;
        border-radius: 50%;
        border: none;
        color: white;
        background: #8208e6;
        cursor: pointer;
    }

    .timer__btn--time-select {
        background: #a344f0;
    }

    .time-select__span--text {
        font-size: 20px;
        font-weight: bold;
    }

</style>
@endpush