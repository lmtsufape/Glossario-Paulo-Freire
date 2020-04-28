@extends('layouts.app')

@section('content')
<script>
    // funções para editar o verbete
    function editarVerbete(id) {
        document.getElementById('verbete_' + id).contentEditable = true;
        document.getElementById('button_salvar_' + id).style.display = 'inline';
        document.getElementById('button_cancelar_' + id).style.display = 'inline';
    }

    function cancelarEditarVerbete(id) {
        document.getElementById('verbete_' + id).contentEditable = false;
        document.getElementById('button_salvar_' + id).style.display = 'none';
        document.getElementById('button_cancelar_' + id).style.display = 'none';
    }

    function salvarVerbete(id) {
        var descricao = document.getElementById('verbete_' + id).text;
        var inputVerbete = document.getElementById('input_editar_verbete_' + id);

        inputVerbete.value = descricao;

        document.getElementById('verbete_' + id).contentEditable = false;
        document.getElementById('button_salvar_' + id).style.display = 'none';
        document.getElementById('button_cancelar_' + id).style.display = 'none';

        var formulario = document.getElementById('form_editar_verbete_' + id);
        formulario.submit();
    }
</script>

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
                    @if(session('mensagem'))
                        <div class="col-md-12" style="margin-top: 5px;">
                            <div class="alert alert-success">
                                <p>{{session('mensagem')}}</p>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-12" style="margin-top: 5px;">
                        <div style="float: right">
                            @auth
                                <a href="{{ route('verbete.add') }}">Adicionar verbete</a> &nbsp; 
                            @endauth
                                <a href=" {{ route('listarPalavras') }} ">Listar todas as palavras</a>
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
                <output id="subtitulo_lista" id="letraSelecionada">{{$letraSelecionada}}</output>
            </div>               
        </div>
        <div class="col-sm-12" id="lista_menu">
            <ul class="list-group">
                @foreach ($verbetes as $verbete)
                <!-- Modal -->
                <div class="modal fade" id="xcluirVerbeteModal" tabindex="-1" role="dialog" aria-labelledby="excluirVerbeteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="excluirVerbeteModalLabel">Confirmar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir esse verbete?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                            <a href="{{ route('verbete.del', ['id' => $verbete->id]) }}"><button type="button" class="btn btn-primary">Sim</button></a>
                        </div>
                        </div>
                    </div>
                </div>
                <li class="list-group-item lista_item" >
                        <a id="verbete_{{$verbete->id}}" href="{{ route('verbete', ['id' => $verbete->id]) }}">{{$verbete->descricao}}</a>
                    @auth
                        <span class="dropdown">
                            <button button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right; border: none; background-color: white;"><img src="{{ asset('icones/menu_dot.svg') }}" alt="Logo" width="auto" height="20" />
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuOffset">
                                <a href="{{ route('trecho.add', ['id' => $verbete->id]) }}" class="dropdown-item" ><img width="22" height="22" src="{{ asset('icones/add.svg') }}" style="margin-right: 10px;"><span>Adicionar trecho</span></a>
                                <a href="javascript:editarVerbete('{{$verbete->id}}')" class="dropdown-item" ><img width="22" height="22" src="{{ asset('icones/edit.svg') }}" style="margin-right: 10px;"><span>Editar veberte</span></a>
                                <a href="" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#xcluirVerbeteModal"><img width="25" height="25" src="{{ asset('icones/excluir.svg') }}" style="margin-right: 10px;"><span>Excluir</span></a>
                            </div>
                        </span>
                        <div>
                            <p>
                                <form id="form_editar_verbete_{{$verbete->id}}" method="POST" action="{{ route('verbete.edit', ['id' => $verbete->id]) }}">
                                    @csrf
                                    <input id="input_editar_verbete_{{$verbete->id}}" name="descricao" type="hidden"></input>
                                    <a id="button_salvar_{{$verbete->id}}" class="btn" style="display: none; border-color:#d5d5d5; border-width:2px; height: 10px; background-color: white; color: #d5d5d5;" href="javascript:salvarVerbete('{{$verbete->id}}')"> Salvar</a>
                                    <a id="button_cancelar_{{$verbete->id}}" class="btn" href="javascript:cancelarEditarVerbete('{{$verbete->id}}')" style="display: none; border-color:#d5d5d5; border-width:2px; height: 25px; background-color: white; color: #d5d5d5;">Cancelar</a>
                                </form>
                            </p>
                        </div>
                    @endauth
                </li>
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
                        <!-- Modal -->
                        <div class="modal fade" id="xcluirTrechoAudioModal_{{$trecho->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirTrechoModalAudioLabel{{$trecho->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="excluirVerbeteModalAudioLabel{{$trecho->id}}">Confirmar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tem certeza que deseja excluir esse trecho?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <a href="{{ route('trecho.del', ['id' => $trecho->id]) }}"><button type="button" class="btn btn-primary">Sim</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5" style="position: relative; height: 180px; width: 280px; top: 1rem; padding-left: 0.5rem;">
                                <img src="{{ asset('imagens/imagem_audio.png') }}" alt="paper" style="width: auto; max-width: 100%">
                                @if ($trecho->arquivo_sd != '')
                                <audio id="my_audio_{{$trecho->id}}" controls style="height: 35px; max-width: 100%;">
                                    <source src="{{ asset('storage/' . $trecho->arquivo_sd) }}" type="audio/mp3">
                                    <source src="{{ asset('storage/' . $trecho->arquivo_sd) }}" type="audio/flac">
                                    <source src="{{ asset('storage/' . $trecho->arquivo_sd) }}" type="audio/mp4">
                                    <source src="{{ asset('storage/' . $trecho->arquivo_sd) }}" type="audio/ogg">
                                </audio>
                                <input id="confirmacao" type="hidden" value="0"></input>
                                <script>
                                    var audio = document.getElementById("my_audio_{{$trecho->id}}");
                                    audio.onplay = function() {
                                        var audio = document.getElementById('my_audio_{{$trecho->id}}');
                                        var confirmacao = document.getElementById('confirmacao').value;
                                        if (confirmacao = "0") {
                                            document.getElementById('confirmacao').value = "1";
                                            var xmlhttp = new XMLHttpRequest();
                                            var url = "{{ url( route('contarView', ['id' => $trecho->id ]) ) }}";
                                            xmlhttp.open("GET", url, true);
                                            xmlhttp.send();
                                        }
                                    };
                                </script>
                                @endif
                                <a class="subtitulo_container" href="{{$trecho->endereco_video}}" style="left: 5px">Áudio completo</a>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">{{$trecho->texto}}</output>
                                        <span  class="subtitulo_container" >{{$trecho->titulo_video}}</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">{{$trecho->quant_views}}</label>
                                        </output>
                                        <span class="dropdown">
                                            <button button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/share.svg') }}" alt="Logo" width="16,74" height="18,34" />
                                                <label class="campo_compartilhar_texto">Compartilhar</label>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                <a class="dropdown-item" onclick="shareFacePopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/facebook.png') }}"><span>Facebook</span></a>
                                                <a class="dropdown-item" onclick="shareWhatsPopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/whatsapp.svg') }}"><span>Whatsapp</span></a>
                                                <a class="dropdown-item" onclick="shareTwitterPopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/twitter.png') }}"><span>Twitter</span></a>
                                            </div>
                                        </span>
                                        @auth
                                            <a href="{{ Route('editar', ['id' => $trecho->id]) }}"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/edit.svg') }}" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Editar</label></button></a>
                                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#xcluirTrechoAudioModal_{{$trecho->id}}" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/excluir.svg') }}" alt="Logo" width="auto" height="25" /><label class="campo_compartilhar_texto">Excluir</label></a>
                                        @endauth                                        
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
                        <!-- Modal -->
                        <div class="modal fade" id="xcluirTrechoVideoModal_{{$trecho->id}}" tabindex="-1" role="dialog" aria-labelledby="excluirTrechoVideoModalLabel{{$trecho->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="excluirVerbeteVideoModalLabel{{$trecho->id}}">Confirmar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tem certeza que deseja excluir esse trecho?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <a href="{{ route('trecho.del', ['id' => $trecho->id]) }}"><button type="button" class="btn btn-primary">Sim</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <li class="list-group-item div_container">
                        <div class="row">
                            <div class="col-sm-5.5">
                                @if ($trecho->arquivo_hd != '' || $trecho->arquivo_hd != '')
                                    <div id="videojs" style="position: relative; height: 180px; width: 280px; top: 1rem; padding-left: 0.5rem;" >
                                        <video id="my_video_{{ $trecho->id }}" class="video-js vjs-default-skin" onclick="contarView()" poster="{{ asset('imagens/imagem_video.png') }}" style="max-height: 100%; max-width: 100%" >
                                        </video>
                                        <input id="confirmacao" type="hidden" value="0"></input>
                                        <script>
                                            videojs('my_video_{{ $trecho->id }}', {
                                            controls: true,
                                            plugins: {
                                            videoJsResolutionSwitcher: {
                                                default: 'low', // Default resolution [{Number}, 'low', 'high'],
                                                dynamicLabel: true,
                                            }
                                            }
                                            }, function() {
                                                var player = this;
                                                window.player = player
                                                player.updateSrc([
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_sd) }}?SD",
                                                    type: 'video/mp4',
                                                    label: 'SD',
                                                    res: 360
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_sd) }}?SD",
                                                    type: 'video/webm',
                                                    label: 'SD',
                                                    res: 360
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_sd) }}?SD",
                                                    type: 'video/mkv',
                                                    label: 'SD',
                                                    res: 360
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_sd) }}?SD",
                                                    type: 'video/ogv',
                                                    label: 'SD',
                                                    res: 360
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_hd) }}?HD",
                                                    type: 'video/mp4',
                                                    label: 'HD',
                                                    res: 720
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_hd) }}?HD",
                                                    type: 'video/webm',
                                                    label: 'HD',
                                                    res: 720
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_hd) }}?HD",
                                                    type: 'video/mkv',
                                                    label: 'HD',
                                                    res: 720
                                                },
                                                {
                                                    src: "{{ asset('storage/' . $trecho->arquivo_hd) }}?HD",
                                                    type: 'video/ogv',
                                                    label: 'HD',
                                                    res: 720
                                                },
                                                ])
                                                player.on('resolutionchange', function(){
                                                    console.info('Source changed to %s', player.src())
                                                })
                                            })

                                            function contarView() {
                                                var video = videojs('my_video_{{ $trecho->id }}');
                                                var confirmacao = document.getElementById('confirmacao').value;
                                                if (video.currentTime() == 0 && confirmacao == "0") {
                                                    document.getElementById('confirmacao').value = "1";
                                                    var xmlhttp = new XMLHttpRequest();
                                                    var url = "{{ url( route('contarView', ['id' => $trecho->id ]) ) }}";
                                                    xmlhttp.open("GET", url, true);
                                                    xmlhttp.send();
                                                }
                                            }
                                        </script>
                                    </div>
                                @else
                                    <img src="{{ asset('imagens/imagem_video.png') }}" alt="paper" style="position: relative; height: 180px; width: 280px; top: 1rem; padding-right: 0.2rem;">
                                @endif
                                <p style="position: relative; left: 10px; top: 1rem;">
                                    <a class="subtitulo_container" href="{{$trecho->endereco_video}}" >Vídeo completo</a>
                                </p>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <output style="width: 100%; word-wrap: break-word;">{{$trecho->texto}}</output>
                                        <span  class="subtitulo_container" >{{$trecho->titulo_video}}</span>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <output class="campo_contador">
                                            <img src="{{ asset('icones/eye.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">{{$trecho->quant_views}}</label>
                                        </output>
                                        <span class="dropdown">
                                            <button button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/share.svg') }}" alt="Logo" width="16,74" height="18,34" />
                                                <label class="campo_compartilhar_texto">Compartilhar</label>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                <a class="dropdown-item" onclick="shareFacePopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/facebook.png') }}"><span>Facebook</span></a>
                                                <a class="dropdown-item" onclick="shareWhatsPopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/whatsapp.svg') }}"><span>Whatsapp</span></a>
                                                <a class="dropdown-item" onclick="shareTwitterPopUp('{{ url( route('pesquisa.id', ['id' => $trecho->id])) }}')"><img width="25" height="25" src="{{ asset('icones/twitter.png') }}"><span>Twitter</span></a>
                                            </div>
                                        </span>
                                        @auth
                                            <a href="{{ Route('editar', ['id' => $trecho->id]) }}"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/edit.svg') }}" alt="Logo" width="16,74" height="18,34" /><label class="campo_compartilhar_texto">Editar</label></button></a>
                                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#xcluirTrechoVideoModal_{{$trecho->id}}" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><img src="{{ asset('icones/excluir.svg') }}" alt="Logo" width="auto" height="25" /><label class="campo_compartilhar_texto">Excluir</label></a>   
                                        @endauth                                
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
    <script type="text/javascript">
        function shareFacePopUp(url){
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url,  "minhaJanelaFB", "height=1000,width=1000");
        }

        function shareWhatsPopUp(url){
            window.open(" https://api.whatsapp.com/send?text=" + url,  "minhaJanelaWa", "height=1000,width=1000");
        }

        function shareTwitterPopUp(url){
            window.open("https://twitter.com/intent/tweet?url=" + url,  "minhaJanelaTw", "height=1000,width=1000");
        }
    </script>
@endif
</div>
@endsection