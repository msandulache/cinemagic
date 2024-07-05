<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CineMagic') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/seatchart.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="antialiased bg-body text-body font-body">
    <div class="">
