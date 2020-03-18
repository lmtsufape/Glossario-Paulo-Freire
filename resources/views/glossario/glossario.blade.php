@extends('layouts.app')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Paulo Freire</title>
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
                                        <a href="" style="margin: 5px;">Glossário</a>
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
    <div class="row" >
        <div class="col-md-4 border-right" style="background-color: white; margin-left: 1rem; margin-right: 1rem; margin-bottom: 1rem;">
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px;">
                    <div style="margin-left: 12px;"><a id="titulo_lista">Lista</a></div>
                        <br>
                    <div style="margin-left: 12px; margin-top: -35px; margin-bottom: 2rem;">
                        <a id="subtitulo_lista">Palavras com a letra </a>
                        <output id="subtitulo_lista" id="letraSelecionada">...</output>
                    </div>
                        
                </div>
                <div class="col-sm-12" id="lista_menu">
                    <ul class="list-group">
                        @foreach ($verbetes as $verbete)
                        <a href="{{ route('verbete', ['id' => $verbete->id]) }}"><li class="list-group-item lista_item" >
                            {{$verbete->descricao}}</li></a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-7 div_resultado">
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                    <div style="margin-left: 12px;"><a id="titulo_busca">Áudios</a></div>
                        <br>
                    <div style="margin-left: 12px; margin-top: -35px;"><a id="subtitulo_busca">Resultado: </a><output id="letraSelecionada"></output></div>
                </div>
                <div class="col-sm-12">
                    <ul class="list-group">
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="imagens/imagem_audio.png" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">Tornar o aluno capaz de ler o mundo para poder transformá-ló, esse é o principal papel da educação na visão de Paulo Freire (1921-1997).</output>
                                        <span class="subtitulo_container">Entrevista a TV TUPI - 1974</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="icones/eye.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="imagens/imagem_audio.png" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <label style="width: 100%; word-wrap: break-word;">Educação como prática da liberdade, de Paulo Freire.</label>
                                        <span  class="subtitulo_container" >Entrevista a Rádio São Paulo - 1980</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="icones/eye.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                    <div class="div_mais_resultados">
                        <div >
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">1</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">2</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">3</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">4</output>
                            <a href="">Ver todo.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                    <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Vídeos</a></div>
                        <br>
                    <div style="margin-left: 12px; margin-top: -35px;"><a style="font-family:sans-serif; color: #aaaaaa;">Resultado: </a><output id="letraSelecionada"></output></div>
                </div>
                <div class="col-sm-12">
                    <ul class="list-group">
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="imagens/imagem_video.png" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">"Acreditamos que a educação sozinha não transforma a sociedade, sem ela tampouco a sociedade muda."</output>
                                        <span  class="subtitulo_container" >Arquivo TV Unicamp</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="icones/eye.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="imagens/imagem_video.png" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <label style="width: 100%; word-wrap: break-word;">Disciplina na sala: a ética e a política na educação.</label>
                                        <span  class="subtitulo_container" >Palestra realizada na USP - 1994</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="icones/eye.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                    <div class="div_mais_resultados">
                        <div >
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">1</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">2</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">3</output>
                            <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">4</output>
                            <a href="">Ver todos.</a>
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