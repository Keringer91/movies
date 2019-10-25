<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::all();
        return view('movies.movies', compact('movies'));    
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.movie', compact('movie'));    
    }

    public function create()
    {
        return view('movies.add');   
    }
}
