<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Le titre de la page -->
        <title>@yield("title")</title>

        <!-- Le css Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <!-- Le contenu -->
        @yield("content")

    </body>
</html>


