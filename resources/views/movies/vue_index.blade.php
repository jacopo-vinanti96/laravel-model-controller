@extends('layouts.layout')

@section('pageTitle')
Movie Controller - Home
@endsection

@section('body')
<div id="app">
    <h2>Home</h2>
    <ul v-for="movie in movies">
        <li>
            Title: @{{ movie.title }}
        </li>
        <li>
            <span v-if="movie.genre.includes(',')">Genres: </span>
            <span v-else>Genre: </span> 
            @{{ movie.genre }}
        </li>
        <li>
            Director: @{{ movie.director }}
        </li>
        <li>
            Year: @{{ movie.year }}
        </li>
        <li>
            Plot: @{{ movie.plot }}
        </li>
    </ul>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection