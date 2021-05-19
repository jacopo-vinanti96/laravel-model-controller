@extends('layouts.admin_form')

@section('pageTitle')
    Movie Controller - Add a movie
@endsection

@section('title')
    <h2>Add a movie</h2>
@endsection

@section('formAction')"{{ route('movies.store') }}"@endsection

@section('formMethod')"POST"@endsection

@section('method')@method('POST')@endsection

@section('movieTitle')
    value="{{ old('title') }}"
@endsection

@section('movieGenre')
    value="{{ old('genre') }}"
@endsection

@section('movieDirector')
    value="{{ old('director') }}"
@endsection

@section('movieYear')
    value="{{ old('year') }}"
@endsection

@section('moviePlot'){{ old('plot') }}@endsection