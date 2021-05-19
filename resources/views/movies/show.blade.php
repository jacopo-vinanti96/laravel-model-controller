{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titolo della pagina --}}
@section('pageTitle')
    {{ $movie['title'] }} | Details
@endsection
{{-- Body --}}
@section('body')
    <a href="{{ route('movies.index') }}" class="btn btn-primary d-block">Back to home page</a>
    <h2 class="d-inline-block">{{ $movie['title'] }}</h2>
    <a href="{{ route('movies.edit', [ 'movie' => $movie->id ]) }}" class="btn btn-primary">Edit</a>
    <form class="d-inline-block" action="{{route('movies.destroy', [ $movie->id ])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
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
