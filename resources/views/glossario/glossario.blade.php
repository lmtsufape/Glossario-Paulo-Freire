@extends('layouts.app')

@section('content')
<div style="padding-top: 80px;">
    <div class="imagem_fundo" style="background-image: url({{asset('imagens/img_grande_50.png')}})">
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

<div class="row" >
<div class="col-md-4 border-right" style="background-color: white; margin-left: 1rem; margin-right: 1rem; margin-bottom: 1rem;">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px;">
            <div style="margin-left: 12px;"><a id="titulo_lista">Lista</a></div>
                <br>
            <div style="margin-left: 12px; margin-top: -35px; margin-bottom: 2rem;">
                <a id="subtitulo_lista">Palavras com a letra </a>
                <output id="subtitulo_lista" id="letraSelecionada">{{$letraSelecionada}}</output>
            </div>               
        </div>
        <div class="col-sm-12" id="lista_menu">
            <ul class="list-group">
                @foreach ($verbetes as $verbete)
                <li class="list-group-item lista_item" ><a href="{{ route('verbete', ['id' => $verbete->id]) }}">
                    {{$verbete->descricao}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="col-md-7 div_resultado">
@if (Route::currentRouteName() === 'verbete')
    @if (count($trechosAudios) != 0)
    <div class="row">
            <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Áudios</a></div>
                    <br>
                <div style="margin-left: 12px; margin-top: -35px;"><a style="font-family:sans-serif; color: #aaaaaa;">Resultado: {{$verbeteSelecionado->descricao}}</a><output id="letraSelecionada"></output></div>
            </div>
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach ($trechosAudios as $trecho)
                        @if($trecho->tipo_recurso == "áudio")
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('imagens/imagem_audio.png') }}" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">"{{$trecho->texto}}"</output>
                                        <span  class="subtitulo_container" >{{$trecho->titulo_video}}</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/share.svg') }}" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                
                        <!-- <div class="div_mais_resultados">
                            <div >
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">1</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">2</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">3</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">4</output>
                                <a href="">Ver todos.</a>
                            </div>
                        </div> -->
            
                        @endif
                    @endforeach
                </ul>
            </div>
    </div>
    @endif
    @if (count($trechosVideos) != 0)
    <div class="row">
            <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Vídeos</a></div>
                    <br>
                <div style="margin-left: 12px; margin-top: -35px;"><a style="font-family:sans-serif; color: #aaaaaa;">Resultado: {{$verbeteSelecionado->descricao}}</a><output id="letraSelecionada"></output></div>
            </div>
            <div class="col-sm-12">
                <ul class="list-group">
                    @foreach ($trechosVideos as $trecho)
                        @if($trecho->tipo_recurso == "vídeo")
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('imagens/imagem_video.png') }}" alt="paper" style="width: auto; max-width: 100%">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">"{{$trecho->texto}}"</output>
                                        <span  class="subtitulo_container" >{{$trecho->titulo_video}}</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </output>
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/share.svg') }}" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                
                        <!-- <div class="div_mais_resultados">
                            <div >
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">1</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">2</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">3</output>
                                <output style="text-align: center;  border: 2px solid #d5d5d5; width: 39px; height: 39px; border-radius: 20px; padding-top: 5px; margin-right: 5px;">4</output>
                                <a href="">Ver todos.</a>
                            </div>
                        </div> -->
            
                        @endif
                    @endforeach
                </ul>
            </div>
    </div>
    @endif
@endif
</div>
@endsection