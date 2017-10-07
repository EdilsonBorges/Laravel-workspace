<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{config('app.name', 'Laravel')}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
    </body>
</html>