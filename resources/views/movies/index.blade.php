{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titlo della pagina --}}
@section('pageTitle')
    Movie Controller - Home
@endsection
{{-- Corpo della pagina --}}
@section('body')
    {{-- Rotta per andare alla sezione "aggiungi un film" --}}
    <a class="btn btn-primary" href="{{ route('movies.create') }}">Aggiungi un film</a>
    {{-- Se l' utente viene rimandato alla index e la creazione ha avuto successo, stampa il messaggio --}}
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    {{-- Stampa una card per ogni film --}}
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
            <a href="{{ route('movies.show', [ $movie->id ]) }}" >Read film's card</a>
        </li>
        <li>
            <form action="{{route('movies.destroy', [ $movie->id ])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </li>
    </ul>
    @endforeach
@endsection

