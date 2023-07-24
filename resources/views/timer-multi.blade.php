@extends('layout.timer-only')
@section('content')
    <div class="text-center" id="timerDiv">
        @livewire('timer-multi', ['timerCountdown'=>$timerCountdown], key(time()))
    </div>
@endsection

@push('addon-script')
    {{-- <script>
        window.setInterval("reloadIFrame();", 1000);
        
        function reloadIFrame() {
            location.reload();
        }
    </script> --}}
@endpush