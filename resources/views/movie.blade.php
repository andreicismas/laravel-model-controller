<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- link bootstap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>model - controller</title>
</head>
<body>
    <main>
        <div class="container"> 
            <div class="row">
                @foreach($movies as $movie)
                    <div class="card">
                        <div>
                            <h5 class="font-weight-bold">Titolo-{{$movie->title}}</h5>
                            <p>{{$movie->original_title}}</p>
                            <p class="font-weight-bold">Country- <em>{{$movie->nationality}}</em></p>
                            <p class="font-weight-bold">Date Movie- <em>{{$movie->date}}</em></p>
                            <p class="font-weight-bold">Vote- <em>{{$movie->vote}}</em></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
   
</body>
</html>