<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Movie;

class MovieController extends Controller
{
    protected $movies;
    public function __construct() {
    }
    public function index () {
        $movies = Movie::all();
        return view('welcome', [
            'movies' => $movies,
        ]);
    }
}
