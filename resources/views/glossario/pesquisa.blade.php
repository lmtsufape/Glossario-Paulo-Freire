@extends('layouts.app')

@section('content')
<div style="padding-top: 80px;">
    <div class="imagem_fundo" style="background-image: url({{ asset('imagens/img_grande_50.png') }})">
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
                        <form method="POST" action="{{ route('pesquisa.nova') }}" >
                            @csrf

                            <div class="row" style="margin-top: 3rem; margin-bottom: 1rem; justify-content: center; ">
                                <input form="nova" class="col-sm-9 form-control" type="text" id="boxBuscar" name="box" value="{{$resultado ?? ''}}" aria-label="Search" style="margin-right: 3px; background-color: white;">
                                <button id="buscar_botao" onclick="botaoClicado(buscar_botao)" class="col-sm-2 btn btn-outline-danger">Buscar</button>
                            </div>
                        </form>
                    </div>
                    @if ($errors->all())
                    <div class="col-md-12" style="margin-top: 5px;">
                        <div class="row" style="margin-top: 0.05rem; margin-bottom: 0.1rem; justify-content: center;">
                        @foreach ($errors->all() as $erro)
                            <div class="alert alert-danger" role="alert">
                                {{$erro}}
                            </div>
                        @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12" style="margin-bottom: 1px;">
                        <div class="row" style="margin-top: 1rem; margin-bottom: 1rem; justify-content: center; ">
                            <form method="POST" action="{{ route('pesquisa.nova') }}">
                            @csrf

                                <button id="todas_botao" class="btn" onclick="botaoClicado(todas_botao)">
                                    <img src="{{ asset('icones/search.svg') }}" alt="Logo" width="16,74" height="18,34" />
                                    <input id="boxTodas" value="" type="hidden" name="box">
                                    <label class="campo_compartilhar_texto">Todas</label>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('pesquisa.audio') }}">
                            @csrf

                                <button id="audio_botao" class="btn" onclick="botaoClicado(audio_botao)">
                                    <img src="{{ asset('icones/audio.svg') }}" alt="Logo" width="16,74" height="18,34" />
                                    <input id="boxAudio" value="" type="hidden" name="box">
                                    <label class="campo_compartilhar_texto">Áudio</label>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('pesquisa.video') }}">
                            @csrf

                                <button id="video_botao" class="btn" onclick="botaoClicado(video_botao)">
                                    <img src="{{ asset('icones/video.svg') }}" alt="Logo" width="16,74" height="18,34" />
                                    <input id="boxVideo" value="" type="hidden" name="box">
                                    <label class="campo_compartilhar_texto">Vídeo</label>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-12" style="margin-top: 5px;">
                        <div style="float: right"><a href="{{ route('listarPalavras') }}">Listar todas as palavras</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (Route::currentRouteName() === 'pesquisa.nova')
    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
            <div style="margin-left: 12px;"><a id="titulo_busca">Áudios</a></div>
                <br>
            <div style="margin-left: 12px; margin-top: -35px;"><a id="subtitulo_busca">Resultado: {{$resultado}}</a><output id="letraSelecionada"></output></div>
        </div>
        <div class="col-sm-12">
            <ul class="list-group">
                @foreach ($trechos as $trecho)
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
                                <span class="subtitulo_container">{{$trecho->titulo_video}}</span>
                            </div>
                            <div class="col-sm-12" style="padding: 1rem;">
                                <output class="campo_contador">
                                    <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                    <label class="campo_compartilhar_texto">20.123</label>
                                </output>
                                <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                    @endif
                @endforeach
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
    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
            <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Vídeos</a></div>
                <br>
            <div style="margin-left: 12px; margin-top: -35px;"><a style="font-family:sans-serif; color: #aaaaaa;">Resultado: {{$resultado}} </a><output id="letraSelecionada"></output></div>
        </div>
        <div class="col-sm-12">
            <ul class="list-group">
                @foreach ($trechos as $trecho)
                    @if($trecho->tipo_recurso=="vídeo")
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
                                    <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </li>
                    @endif
                @endforeach
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
    
@elseif(Route::currentRouteName() === 'pesquisa.video')
<div class="row">
    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
        <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Vídeos</a></div>
            <br>
        <div style="margin-left: 12px; margin-top: -35px;"><a style="font-family:sans-serif; color: #aaaaaa;">Resultado: {{$resultado}} </a><output id="letraSelecionada"></output></div>
    </div>
    <div class="col-sm-12">
        <ul class="list-group">
            @foreach ($trechos as $trecho)
                @if($trecho->tipo_recurso=="vídeo")
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
                @endif
            @endforeach
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
   
@elseif(Route::currentRouteName() === 'pesquisa.audio') 
<div class="row">
    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
        <div style="margin-left: 12px;"><a id="titulo_busca">Áudios</a></div>
            <br>
        <div style="margin-left: 12px; margin-top: -35px;"><a id="subtitulo_busca">Resultado: {{$resultado}}</a><output id="letraSelecionada"></output></div>
    </div>
    <div class="col-sm-12">
        <ul class="list-group">
            @foreach ($trechos as $trecho)
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
                            <span class="subtitulo_container">{{$trecho->titulo_video}}</span>
                        </div>
                        <div class="col-sm-12" style="padding: 1rem;">
                            <output class="campo_contador">
                                <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                <label class="campo_compartilhar_texto">20.123</label>
                            </output>
                            <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="icones/share.svg" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Compartilhar</label></button>
                        </div>
                    </div>
                </div>
            </div>
            </li>
                @endif
            @endforeach
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
@endif
            
<script type="text/javascript">
    function botaoClicado(id) {
        var formulario = id.id;
        var inputBox = document.getElementById("boxBuscar");

        document.getElementById("boxTodas").value = inputBox.value;
        document.getElementById("boxAudio").value = inputBox.value;
        document.getElementById("boxVideo").value = inputBox.value;
    } 
</script>
@endsection