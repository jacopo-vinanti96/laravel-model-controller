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
                <a href="{{ route('movies.show', [$movie->id]) }}" >Read film's card</a>
            </li>
        </ul>
        @endforeach
    </body>
</html>
