<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        
        <h1>Hello world!</h1>
        <nav>
            <ul>
                @foreach ($navbar as $page)
                <li>
                    {{ $page }}
                </li>
                @endforeach
            </ul>
        </nav>
        
    </body>
</html>
