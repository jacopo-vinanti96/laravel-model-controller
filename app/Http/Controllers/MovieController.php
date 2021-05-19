<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Movie;

class MovieController extends Controller
{

    protected $validateFields = [];

    public function __construct() {
        $year = date("Y");
        $this->validateFields = [
            'title' => 'required | string | max:100',
            'director' => 'required | string | max:50',
            'genre' => 'required | string | max:80',
            'plot' => 'required | string',
            'year' => 'required | numeric | min:1900 | max:'.$year
        ];
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', [
            'movies' => $movies,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vueIndex()
    {
        $movies = Movie::all();
        return view('movies.vue_index', [
            'movies' => $movies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $data = $request->all();

        $request->validate( $this->validateFields );

        $movieNew = Movie::create( $data );

        return redirect()
        ->route('movies.index')
        ->with('message', '"' . $movieNew->title . '"' . ' has been added to movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Se qua si scrive function show(Movie $movie) Laravel trova da solo il $movie con l' id passato
     * */
    public function show( Movie $movie )
    {
        return view('movies.show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', [ 'movie' => $movie ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->all();

        $request->validate($this->validateFields);

        $movie->update( $data );

        return redirect()
        ->route('movies.show', $movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()
        ->route('movies.index')
        ->with('message', '"' . $movie->title . '"' . ' has been deleted from movies');
    }
}
