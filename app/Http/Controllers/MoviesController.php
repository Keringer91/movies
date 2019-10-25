<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\Movies;

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
        $movie = Movie::with('comments')->findorFail($id);
        return view('movies.movie', compact('movie'));    
    }

    public function create()
    {
        return view('movies.create');   
    }

    public function store(Request $request)
    {
        $time = date('Y');
        $this->validate(request(),[
            'title' => 'required', 
            'year' => 'required | between:1900, $time', 
            'genre' => 'required',
            'director' => 'required',
            'storyline' => 'required | max:1000'
            ]);

        $movie = Movie::create(request()->all());

        return redirect()->route('movies.movies');
    }

}
