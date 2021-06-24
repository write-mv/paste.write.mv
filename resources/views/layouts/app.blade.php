<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @unless (request()->is('/'))
        {{-- We don't want to allow indexing of pastes. --}}
        <meta name="robots" content="noindex">
    @endif

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
            document.querySelector('html').classList.remove('light')
        } else {
            document.querySelector('html').classList.remove('dark')
            document.querySelector('html').classList.add('light')
        }
    </script>

    <title>Dhivehi Pastebin | Writemv</title>

    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="/css/font.css" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('layouts.favicons')
</head>
<body class="dark:bg-dark">

@yield('content')

<script src="https://unpkg.com/thaana-keyboard@latest/dist/ThaanaKeyboard.min.js"></script>
<script>
    window.addEventListener('DOMContentLoaded' , (e) => {
        new ThaanaKeyboard();
    });
    </script>
</body>
</html>