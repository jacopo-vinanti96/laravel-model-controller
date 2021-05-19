@extends('layouts.layout')
{{-- Titlo della pagina --}}
@section('pageTitle')
    Movie Controller - Edit movie
@endsection
{{-- Corpo della pagina --}}
@section('body')
    <h2>Editing </h2>
    <form action="{{ route('movies.update', [ 'movie' => $movie->id ]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $movie->title }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" value="{{ $movie->genre }}">
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" value="{{ $movie->director }}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="numeric" name="year" id="year" value="{{ $movie->year }}">
        </div>
        <div class="form-group">
            <label for="plot">Plot</label>
            <textarea class="align-top" rows="10" cols="50" name="plot" id="plot">{{ $movie->plot }}</textarea>
        </div>

        <input class=".btn btn-primary" type="submit" value="Send">
    </form>

@endsection