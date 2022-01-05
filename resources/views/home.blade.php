<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf
        <title>Auth</title>
    </head>
    <body>
Здесь ничего нет, все работает через API.
    </body>
    @include('auth.js')
</html>
