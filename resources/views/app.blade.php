<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Icebreaker</title>
        @routes
        @vite(['resources/sass/style.scss', 'resources/js/app.js'])
        @inertiaHead
    </head>
    <body>
    @inertia
    </body>
</html>
