<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="movies">
        @foreach($movies as $movie)
    
            
                <p>
                   <h3>{{$movie->title}}</h3> <br>
                    {{$movie->storyline}} <br>

                </p>
        
    
        @endforeach
    </div>

</body>
</html>