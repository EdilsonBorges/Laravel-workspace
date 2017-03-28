<!DOCTYPE html>
<html>
    <head>
        <title>@yield('header')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css')}}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
<!--         <div class="container">
            <div class="content">
                <div class="title">About page</div>
            </div>
        </div> -->
        <h1>@yield('content')</h1>

        @yield('footer')
    </body>
</html>
