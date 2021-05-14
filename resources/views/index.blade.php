<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie Controller - Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @foreach ( $movies as $movie )
        <h2>{{ $movie['Title'] }}</h2>
        <ul>
            <li>
                {{ $movie['Genre'] }}
            </li>
            <li>
                {{ $movie['Director'] }}
            </li>
            <li>
                <p>{{ $movie['Plot'] }}</p>
            </li>
        </ul>
        @endforeach
    </body>
</html>