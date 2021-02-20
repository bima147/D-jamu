<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ config('app.name') }} - Page Not Found</title>
        <meta name="description" content="D'Jamu - Page Not Founds">
        <meta name="keywords" content="Page Not Found, 404"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    </head>
    <body class="bg-purple">
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </body>
</html>