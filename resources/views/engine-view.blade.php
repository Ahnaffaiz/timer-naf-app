@extends('layout.timer-only')
@section('content')
    <div class="text-center" id="timerDiv">
        @livewire('engine-view', key(time()))
    </div>
@endsection
@push('addon-script')
    <script>
        window.setInterval("reloadIFrame();", 1000);
        
        function reloadIFrame() {
            var frame = document.getElementById("timerEngine");
            frame.src = frame.src;
        }
    </script>
@endpush