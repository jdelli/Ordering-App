<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        @vite(['resources/css/app.scss'])
    </head>
    <body>

        @yield('content')


    </body>

    <footer>
    <p>Copyright 2024 Computer Parts </p>
    </footer>
</body>
</html>