<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgencyTrack') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('layouts.navigation')

    <main class="container" style="padding: 24px;">
        @if(session('success'))
            <div style="margin-bottom: 16px; padding: 12px; border: 1px solid #bbf7d0; background: #f0fdf4; color: #166534; border-radius: 8px;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>