<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">

    <title>
        {{-- @yield('title', 'Laravel Comics - Home') --}}
        @yield('title')
    </title>

    {{-- Inclusione di Bootstrap --}}
    @vite(['resources/sass/app.scss','resources/js/app.js'])

</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')   
</body>
</html>
