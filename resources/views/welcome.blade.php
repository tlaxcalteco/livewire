<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <title>Livewire</title>
        @livewireStyles
    </head>
    <body class="antialiased">

        @livewire('show')
        
        @livewireScripts
    </body>
</html>
