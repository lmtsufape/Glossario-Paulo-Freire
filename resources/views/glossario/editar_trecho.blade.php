@extends('layouts.app')

@section('content')
<!-- <div class="col-md-7 div_resultado"> -->
@if ($trecho->tipo_recurso == "áudio")
    <div class="row">
            <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Editar trecho</a></div>            </div>
            <div class="col-sm-12">
            @if ($errors->any())
                <div class="col-md-12" style="margin-top: 5px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger" role="alert">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <ul class="list-group">
                        <li class="list-group-item div_container">
                        <form action="{{ Route('editar.update', ['id' => $trecho]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- Fazer testes com audio -->
                                    @if (!($trecho->arquivo == ''))
                                        <div id="videojs">
                                            <video-js video-js id="my_audip_{{ $trecho->id }}" class="vjs-default-skin" controls preload="auto" poster="{{ asset('imagens/imagem_audio.png') }}" style="height: 150px; max-width: 100%">
                                                <source src="{{ asset('storage/' . $trecho->arquivo) }}" type="video/mp4">
                                            </video-js>
                                            <script>
                                                var player = videojs('my_audio_{{ $trecho->id }}');
                                            </script>
                                        </div>
                                    @else
                                        <img src="{{ asset('imagens/imagem_audio.png') }}" alt="paper" style="width: auto; max-width: 100%">
                                    @endif
                                    <input type="file" name="audio" id="audio"></input>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-12" style="padding-top: 1rem;">
                                            <span style="width: 100%; word-wrap: break-word;">Texto:</span>
                                            <textarea name="texto" rows="8" cols="90" style="width: 100%; word-wrap: break-word;">{{$trecho->texto}}</textarea>
                                            <span style="width: 100%; word-wrap: break-word;">Titulo:</span><br>
                                            <input name="titulo_video" type="text" size="50px" class="subtitulo_container" value="{{$trecho->titulo_video}}"></input>
                                        </div>
                                        <div class="col-sm-12" style="padding: 1rem;">
                                            <button type="submit" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!-- <img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Salvar</label></button>
                                            <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!--<img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Cancelar</label></button></a>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </li>   
                </ul>
            </div>
    </div>
@else
    <div class="row">
            <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Editar Trecho</a></div>
            </div>
            <div class="col-sm-12">
            @if ($errors->any())
                <div class="col-md-12" style="margin-top: 5px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger" role="alert">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <ul class="list-group">
                    <li class="list-group-item div_container">
                        <form action="{{ Route('editar.update', ['id' => $trecho]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-5">
                                    @if (!($trecho->arquivo == ''))
                                        <div id="videojs">
                                            <video-js video-js id="my_video_{{ $trecho->id }}" class="vjs-default-skin" controls preload="auto" poster="{{ asset('imagens/imagem_video.png') }}" style="height: 300px; max-width: 100%">
                                                <source src="{{ asset('storage/' . $trecho->arquivo) }}" type="video/mp4">
                                            </video-js>
                                            <script>
                                                var player = videojs('my_video_{{ $trecho->id }}');
                                            </script>
                                        </div>
                                    @else
                                        <img src="{{ asset('imagens/imagem_video.png') }}" alt="paper" style="width: auto; max-width: 100%">
                                    @endif
                                    <input type="file" name="video" id="video"></input>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-12" style="padding-top: 1rem;">
                                            <span style="width: 100%; word-wrap: break-word;">Texto:</span>
                                            <textarea name="texto" rows="8" cols="90" style="width: 100%; word-wrap: break-word;">{{$trecho->texto}}</textarea>
                                            <span style="width: 100%; word-wrap: break-word;">Titulo:</span><br>
                                            <input name="titulo_video" type="text" size="50px" class="subtitulo_container" value="{{$trecho->titulo_video}}"></input>
                                        </div>
                                        <div class="col-sm-12" style="padding: 1rem;">
                                            <button type="submit" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!-- <img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Salvar</label></button>
                                            <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!--<img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Cancelar</label></button></a>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </li>
                </ul>
            </div>
    </div>
@endif
<!-- </div> -->
@endsection