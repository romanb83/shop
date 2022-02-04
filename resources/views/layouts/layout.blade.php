<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="header">
        @include('layouts.includes.header')
    </header>
    <main class="main">

        @yield('content')

    </main>
    <footer class="footer">
        @include('layouts.includes.footer')
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
