<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('Pawrfect - Trouve ton animal de compagnie') }}</title>
        <meta name="description" content="@yield('meta-description')">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        @if (isset($header))
            {{ $header }}
        @endif

        {{ $slot }}

        @if (isset($footer))
            {{ $footer }}
        @endif
    </body>
</html>