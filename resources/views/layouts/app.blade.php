<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kanban</title>
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">

    </head>
    <body>
        <h1> @yield('title') </h1>
        <div class="container">
            @yield('content')
        </div>
    </body>

</html>
