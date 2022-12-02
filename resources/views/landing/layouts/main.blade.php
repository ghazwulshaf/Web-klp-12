<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coding</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="icon/png">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/landing/main.style.css') }}">

    {{-- Layouts CSS --}}
    <link rel="stylesheet" href="{{ asset('css/landing/layouts/navbar.style.css') }}">

    {{-- Utilities CSS --}}
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">

    {{-- Components CSS --}}
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>
<body>
    @include('landing.layouts.navbar')

    <main>
        @yield('content')
    </main>
</body>
</html>