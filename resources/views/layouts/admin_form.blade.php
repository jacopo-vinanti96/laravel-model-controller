{{-- Si importa il layout base --}}
@extends('layouts.layout')
{{-- Titlo della pagina --}}
@section('pageTitle')
    @yield('pageTitle')
@endsection
{{-- Corpo della pagina --}}
@section('body')
    <a href="{{ route('movies.index') }}" class="btn btn-primary d-block">Back to home page</a>
    @if ( $errors->any() )
        <div class="alert alert-danger">
            @foreach ( $errors->all() as $error )
                {{ $error }}
            @endforeach
        </div>
    @endif
    @yield('title')
    <form action=@yield('formAction') method=@yield('formMethod')>
        @csrf
        @yield('method')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" @yield('movieTitle')>
        </div>
        <div class="form-group">
            <label for="genre">Genres</label>
            <input type="text" name="genre" id="genre" placeholder="Genre1, Genre2..." @yield('movieGenre')>
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" placeholder="Director" @yield('movieDirector')>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="numeric" name="year" id="year" placeholder="YYYY minimum: 1900" @yield('movieYear')>
        </div>
        <div class="form-group">
            <label for="plot">Plot</label>
            <textarea class="align-top" rows="4" cols="50" name="plot" id="plot" placeholder="Plot">@yield('moviePlot')</textarea>
        </div>

        <input class=".btn btn-primary" type="submit" value="Send">
    </form>

@endsection