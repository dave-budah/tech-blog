@props(['title'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="!scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Facebook Meta  -->
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:image" content="image/jpeg">
    <meta property='og:url' content="@yield('url')">

    <!-- Twitter Meta  -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@blog">
    <meta name="twitter:image" content="@yield('image')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:title" content="@yield('title')">

    <title>{{ config('app.name', '') }} {{ $title ?? '' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner/>


@include('layouts.partials.header')


<main class="main px-2">
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

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>
</body>
</html>
