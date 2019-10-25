@extends('layouts.master')

@section('content')
    <h2>Add a new movie here</h2>

    <form method="POST" action="/create">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control"/>
           
        </div>

        <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" class="form-control"/>
                
        </div>

        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-control"/>
            
        </div>

        <div class="form-group">
            <label for="director">Director:</label>
            <input type="text" id="director" name="director" class="form-control"/>
            
        </div>

        <div class="form-group">
            <label for="storyline">Storyline:</label>
            <input type="text" id="storyline" name="storyline" class="form-control"/>
            
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>

    @if(count($errors->all()))

        <ul>
            @foreach($errors->all() as $error)

                <div class="form-group"> 
                    <div class="alert  alert-danger">
                    
                            <li>
                                {{ $error }}
                            </li>
                        
                    </div>
                </div>

            @endforeach
        </ul>
    @endif
@endsection