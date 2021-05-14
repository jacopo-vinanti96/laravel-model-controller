<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $movie['title'] }} | Details</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2>{{ $movie['title'] }}</h2>
        <ul>
            <li>
                @if ( strpos( $movie['genre'], ',' ) >= 0 )
                Genres: {{ $movie['genre'] }}
                @else
                Genre: {{ $movie['genre'] }}
                @endif
            </li>
            <li>
                Director: {{ $movie['director'] }}
            </li>
            <li>
                Year: {{ $movie['year'] }}
            </li>
            <li>
                Summary:<br>
                <p>{{ $movie['plot'] }}</p>
            </li>
        </ul>
    </body>
</html>
