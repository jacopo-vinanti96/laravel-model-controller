{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titlo della pagina --}}
@section('pageTitle')
    Movie Controller - Add a movie
@endsection
{{-- Corpo della pagina --}}
@section('body')
    <h2>Add a movie</h2>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" placeholder="Genre">
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" placeholder="Director">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="numeric" name="year" id="year" placeholder="YYYY minimum: 1900">
        </div>
        <div class="form-group">
            <label for="plot">Plot</label>
            <textarea rows="4" cols="50" name="plot" id="plot" placeholder="Plot">
            </textarea>
        </div>

        <input class=".btn btn-primary" type="submit" value="Send">
    </form>

@endsection