@extends('layouts.app')

@section('content')
<!-- <div class="col-md-7 div_resultado"> -->
@if ($trecho->tipo_recurso == "áudio")
    <div class="row">
            <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
                <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Editar trecho</a></div>            </div>
            <div class="col-sm-12">
                <ul class="list-group">
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
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!-- <img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Salvar</label></button>
                                        <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!--<img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Cancelar</label></button></a>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <ul class="list-group">
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
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!-- <img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Salvar</label></button>
                                        <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><!--<img src="#" alt="Logo" width="16,74" height="18,34" /> --><label class="campo_compartilhar_texto">Cancelar</label></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                </ul>
            </div>
    </div>
@endif
<!-- </div> -->
@endsection