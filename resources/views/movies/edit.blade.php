@extends('layouts.admin_form')
{{-- Titlo della pagina --}}
@section('pageTitle')
    Movie Controller - Editing {{ $movie->title }}
@endsection
{{-- Corpo della pagina --}}
@section('title')
    <h2>Editing {{ $movie->title }}</h2>
@endsection

@section('formAction')"{{ route('movies.update', [ $movie->id ]) }}"@endsection

@section('formMethod')"POST"@endsection

@section('method')@method('PUT')@endsection

@section('movieTitle')
value="{{ old('title') ? old('title') : $movie->title }}"
@endsection

@section('movieGenre')
value="{{ old('genre') ? old('genre') : $movie->genre }}"
@endsection

@section('movieDirector')
value="{{ old('director') ? old('director') : $movie->director }}"
@endsection

@section('movieYear')
value="{{ old('year') ? old('year') : $movie->year }}"
@endsection

@section('moviePlot')
{{ old('plot') ? old('plot') : $movie->plot }}
@endsection
