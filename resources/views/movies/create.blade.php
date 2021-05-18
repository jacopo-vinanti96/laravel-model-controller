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
        @method('POST')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" >
    </form>

@endsection