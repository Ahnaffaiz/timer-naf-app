@extends('layout.timer')
@section('content')
    <div class="text-center" id="timerDiv">
        @livewire('preview')
    </div>
@endsection
@push('addon-script')
    <script>
        window.setInterval("reloadIFrame();", 1000);
        
        function reloadIFrame() {
            var frame = document.getElementById("timerCountdown");
            frame.src = frame.src;
        }
    </script>
@endpush