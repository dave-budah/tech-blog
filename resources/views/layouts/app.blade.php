@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} {{ $title ?? '' }}</title>

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner/>


@include('layouts.partials.header')


<main class="main">
{{ $slot }}
</main>

@include('layouts.partials.footer')

@stack('modals')

@livewireScripts
<script src="{{ asset('js/scrollreveal/scrollreveal.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
<script>
    const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e){
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>
</body>
</html>
