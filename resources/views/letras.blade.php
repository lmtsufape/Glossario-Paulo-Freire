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
    <ul>
  @foreach ($letras as $letra)
    @if($letra->count > 0)
<li><a href="{{ route('letra', ['l' => $letra->l]) }}">
{{$letra->l}} ({{$letra->count}})</a></li>
    @else
       <li>{{$letra->l}} ({{$letra->count}})</li>
    @endif
  @endforeach
       </ul> 
    </body>
</html>
