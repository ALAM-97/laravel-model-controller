<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>I NOSTRI FILM</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2>{{$movie['title']}}</h2>
                <h4>{{$movie['original_title']}}</h4>
                <div>Anno di uscita: {{$movie['date']}}</div>
                <div>Voto: {{$movie['vote']}}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>