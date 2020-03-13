<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <h1>{{$letra}}</h1>
    <ul>
  @foreach ($verbetes as $verbete)
<li><a href="{{ route('verbete', ['id' => $verbete->id]) }}">
{{$verbete->descricao}}</a></li>
  @endforeach
       </ul> 
    </body>
</html>
