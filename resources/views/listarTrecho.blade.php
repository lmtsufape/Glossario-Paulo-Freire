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
Utilizar o VideoJS : https://videojs.com/getting-started/
    <h1>{{$verbete->descricao}}</h1>
    <ul>
  @foreach ($trechos as $trecho)
<li>{{$trecho->texto}}</li>
  @endforeach
       </ul> 
    </body>
</html>
