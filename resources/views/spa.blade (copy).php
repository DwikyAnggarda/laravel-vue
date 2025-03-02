<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">


        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app"></div>
        <!--<script src="{{ asset('js/coreScripting.js') }}"></script>-->

        @vite('resources/js/app.js')
    </body>
</html>
