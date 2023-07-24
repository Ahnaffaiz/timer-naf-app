<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}" />
        <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
        @livewireStyles
        @stack('addon-style')
    </head>
    <body data-bs-theme="light" class="bg-transparent">
        @yield('content')
        @livewireScripts
        <x-livewire-alert::scripts />
        @stack('addon-script')
    </body>
</html>