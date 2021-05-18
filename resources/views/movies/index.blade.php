{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titlo della pagina --}}
@section('pageTitle')
    Movie Controller - Home
@endsection
{{-- Corpo della pagina --}}
@section('body')
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
@endsection

