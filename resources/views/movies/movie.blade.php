@extends('layouts.master')
@section('title', 'Single Movie Page')

@section('content')
    <div class="container border">
        @if ($movie)
        <h1>{{ $movie->title}}</h1>
        <p>Year: {{ $movie->year }}</p>
        <p>Genre: {{ $movie->genre }}</p>
        <p>Director: {{ $movie->director }}</p>
        <p>Storyline: {{ $movie->storyline }}</p>
        <br>
        @endif
    </div>

    @if (count($movie->comments))
    <div class="container">
        <h3>Comments: </h3>

        <ul class="list-unstyled">
            @foreach ($movie->comments as $comment)
                <li class="border-bottom">
                    <p>
                        {{ $comment->content }}
                        {{ $comment->created_at }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection