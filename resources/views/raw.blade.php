<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Dhivehi Pastebin | Writemv</title>

    @include('layouts.favicons')
</head>
<body>
    <pre class="faseyha text-right" dir="rtl">{{ $paste->content }}</pre>
</body>
</html>