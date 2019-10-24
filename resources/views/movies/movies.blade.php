@extends('layouts.master')

@section('title')

@section('content')
    <div class="movies">
        @foreach($movies as $movie)
    
            
                <p>
                   <h3>{{$movie->title}}</h3> <br>
                    {{$movie->storyline}} <br>

                </p>
        
    
        @endforeach
    </div>
@endsection