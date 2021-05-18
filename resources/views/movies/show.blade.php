{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titolo della pagina --}}
@section('pageTitle')
    {{ $movie['title'] }} | Details
@endsection
{{-- Body --}}
@section('body')
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
@endsection
