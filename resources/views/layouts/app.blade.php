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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="antialiased" x-data="{ page: 'home', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
