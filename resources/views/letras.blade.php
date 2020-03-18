@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

        <link rel="stylesheet" type="text/css" href="styles/style.css"> 
       
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      
    <div class="container">
        <div style="padding-top: 80px;">
            <div class="imagem_fundo" style="background-image: url(imagens/img_grande_50.png)">
                <div class="card-body menu_glossario">
                    <div class="menu_glossario_design">
                        <div class="row" style="margin: 1rem">
                            <div class="col-md-12">
                                <div class="row container">
                                    <div class="col-xs-2">
                                        <a href="{{ route('glossario') }}" style="margin: 5px;">Glossário</a>
                                    </div>
                                    <div class="col-xs-2">
                                        <a href="{{ route('pesquisa') }}" style="margin: 5px;">Pesquisa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 5px;">
                                <div class="row">
                                    @foreach ($letras as $letra)
                                    <div class="menu_glossario_letra_borda">
                                        @if($letra->count > 0)
                                        <div class="col-xs-1 menu_glossario_letra"><a href="{{ route('letra', ['l' => $letra->l]) }}">
                                        {{$letra->l}}</a></div>
                                        @else
                                        <div class="col-xs-1 menu_glossario_letra">{{$letra->l}}</div>
                                        @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 5px;">
                                <div style="float: right"><a href=" {{ route('listarPalavras') }} ">Listar todas as palavras</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      <!-- funcao lista_menu css -->
      <script type="text/javascript">
          var $li = $('#lista_menu li').click(function() {
              $li.removeClass('selected');
              $(this).addClass('selected');
          });
      </script>
    </body>
</html>
