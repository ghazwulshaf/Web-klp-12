<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coding</title>
    <link rel="icon" href="{{ asset('assets/img/coding.png') }}" type="icon/png">
</head>
<body>
    @include('landing.layouts.navbar')

    @yield('content')
</body>
</html>