<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/admin.scss', 'resources/js/admin.js'])

    @stack('styles')
</head>
<body x-data="{ isSidebarOpen: true, activePage: '{{ Route::currentRouteName() }}' }">
    <div id="app">
        @include('layouts.admin_navbar')

        <main id="content" class="flex-grow-1 p-3" :class="{ 'expanded': !isSidebarOpen }">
        @yield('content')
        </main>

    </div>

    
    @stack('scripts')

    
</body>
</html>
