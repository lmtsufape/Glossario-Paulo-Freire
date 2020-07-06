@extends('layouts.app')

@section('content')
@if(session('mensagem'))
    <div class="alert alert-success">
        <p>{{session('mensagem')}}</p>
    </div>
@endif
@if ($trecho->tipo_recurso == "áudio")
<div class="row">
    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
        <div style="margin-left: 12%; align-items: left;"><h2>@lang('mensagens.Editar trecho')</h2></div>
        <ul class="list-group" style="align-items: center;">
                <li class="list-group-item div_container form-group" style="border-radius: 20px; width: 80%; height: auto;">
                <form action="{{ Route('editar.update', ['id' => $trecho]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-12">
                            <label for="titulo" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Titulo'):</label>
                            <input type="text" class="form-control @error('titulo_video') is-invalid @enderror" id="titulo" name="titulo_video" value="{{ $trecho->titulo_video }}">                                    
                        </div>

                        @error('titulo_video')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        {{-- <div class="col-sm-4" style="font-weight: bolder;">
                            <label for="tipo">Tipo de recurso:</label>
                            <select id="tipo" class="custom-select custom-select-sm-3">
                                <option selected>Selecione o tipo de recurso</option>
                                <option value="áudio">Áudio</option>
                                <option value="vídeo">Vídeo</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-12">
                            <label for="texto" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Texto'):</label>
                            <textarea id="texto" name="texto" class="form-control @error('texto') is-invalid @enderror" rows="8" cols="90" style="width: 100%; word-wrap: break-word;">{{ $trecho->texto }}</textarea>
                        </div>

                        @error('texto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class=row style="margin-top:10px;">
                        <div class="col-sm-6">
                            <span style="font-weight: bolder;">@lang('mensagens.audioHD'):</span> @if($trecho->arquivo_hd != '') <a href="{{ route('baixar.arquivo_hd', ['id' => $trecho->id]) }}">@lang('mensagens.Arquivo atual')</a> <a href="#" data-toggle="modal" data-target="#modalExcluirHD"><img src="{{ asset('icones/excluir.svg') }}" alt="" width="20px" height="auto" style="margin-bottom: 5px;"></a>@endif
                        </div>
                        <div class="col-sm-6">
                            <span style="font-weight: bolder;">@lang('mensagens.audioSD'):</span> @if($trecho->arquivo_sd != '') <a href="{{ route('baixar.arquivo_sd', ['id' => $trecho->id]) }}">@lang('mensagens.Arquivo atual')</a> <a href="#" data-toggle="modal" data-target="#modalExcluirSD"><img src="{{ asset('icones/excluir.svg') }}" alt="" width="20px" height="auto" style="margin-bottom: 5px;"></a>@endif
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-6">
                            <input id="arquivo_hd_audio" class="custom-file-input" type="file" accept=".mp3,.mp4,.m4a,.ogg,.flac" name="arquivo_hd_audio" style="width: 93%; left: 15px;">
                            <label class="custom-file-label @error('arquivo_hd_audio') is-invalid @enderror" for="arquivo_hd_audio" style="width: 93%; left: 15px;">@lang('mensagens.SelecioneHD')...</label>
                            
                            @error('arquivo_hd_audio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="arquivo_sd_audio" class="custom-file-input" type="file" accept=".mp3,.mp4,.m4a,.ogg,.flac" name="arquivo_sd_audio" style="width: 93%; left: 15px;">
                            <label class="custom-file-label @error('arquivo_sd_audio') is-invalid @enderror" for="arquivo_sd_audio" style="width: 93%; left: 15px;">@lang('mensagens.SelecioneSD')...</label>
                        
                            @error('arquivo_sd_audio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-6">
                            <label for="tempo" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Tempo'):</label>
                            <input id="tempo" class="form-control @error('tempo') is-invalid @enderror" name="tempo" type="text" size="50px" value="{{$trecho->tempo}}">
                            
                            @error('tempo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="endereco" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Link do áudio completo'):</label>
                            <input id="endereco" name="endereco" class="form-control @error('endereco') is-invalid @enderror" type="text" size="50px" value="{{$trecho->endereco_video}}">
                            
                            @error('endereco')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding: 2rem 0rem 2rem 0rem;">
                        <div class="col-sm-6">
                            <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; width: 100%;"><label class="campo_compartilhar_texto">@lang('mensagens.Cancelar')</label></button></a>                            
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-atualizar" style="border-width:2px; height: 40px;">@lang('mensagens.Salvar')</button>
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
        <div style="margin-left: 12%; align-items: left;"><h2>@lang('mensagens.Editar trecho')</h2></div>
        <ul class="list-group" style="align-items: center;">
                <li class="list-group-item div_container form-group" style="border-radius: 20px; width: 80%; height: auto;">
                <form action="{{ Route('editar.update', ['id' => $trecho]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-12">
                            <label for="titulo" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Titulo'):</label>
                            <input type="text" class="form-control @error('titulo_video') is-invalid @enderror" id="titulo" name="titulo_video" value="{{ $trecho->titulo_video }}">                                    
                        </div>

                        @error('titulo_video')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        {{-- <div class="col-sm-4" style="font-weight: bolder;">
                            <label for="tipo">Tipo de recurso:</label>
                            <select id="tipo" class="custom-select custom-select-sm-3">
                                <option selected>Selecione o tipo de recurso</option>
                                <option value="áudio">Áudio</option>
                                <option value="vídeo">Vídeo</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-12">
                            <label for="texto" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Texto'):</label>
                            <textarea id="texto" name="texto" class="form-control @error('texto') is-invalid @enderror" rows="8" cols="90" style="width: 100%; word-wrap: break-word;">{{ $trecho->texto }}</textarea>
                        </div>

                        @error('texto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class=row style="margin-top:10px;">
                        <div class="col-sm-6">
                            <span style="font-weight: bolder;">@lang('mensagens.HD'):</span> @if($trecho->arquivo_hd != '') <a href="{{ route('baixar.arquivo_hd', ['id' => $trecho->id]) }}">@lang('mensagens.Arquivo atual')</a> <a href="#" data-toggle="modal" data-target="#modalExcluirHD"><img src="{{ asset('icones/excluir.svg') }}" alt="" width="20px" height="auto" style="margin-bottom: 5px;"></a>@endif
                        </div>
                        <div class="col-sm-6">
                            <span style="font-weight: bolder;">@lang('mensagens.SD'):</span> @if($trecho->arquivo_sd != '') <a href="{{ route('baixar.arquivo_sd', ['id' => $trecho->id]) }}">@lang('mensagens.Arquivo atual')</a> <a href="#" data-toggle="modal" data-target="#modalExcluirSD"><img src="{{ asset('icones/excluir.svg') }}" alt="" width="20px" height="auto" style="margin-bottom: 5px;"></a>@endif
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-6">
                            <input id="arquivo_hd_video" class="custom-file-input" type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_hd_video" style="width: 93%; left: 15px;">
                            <label class="custom-file-label @error('arquivo_hd_video') is-invalid @enderror" for="arquivo_hd_video" style="width: 93%; left: 15px;">@lang('mensagens.SelecioneHD')...</label>
                        
                            @error('arquivo_hd_video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="arquivo_sd_video" class="custom-file-input" type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_sd_video" style="width: 93%; left: 15px;">
                            <label class="custom-file-label @error('arquivo_sd_video') is-invalid @enderror" for="arquivo_sd_video" style="width: 93%; left: 15px;">@lang('mensagens.SelecioneSD')...</label>
                            
                            @error('arquivo_sd_video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-6">
                            <label for="tempo" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Tempo'):</label>
                            <input id="tempo" class="form-control @error('tempo') is-invalid @enderror" name="tempo" type="text" size="50px" value="{{$trecho->tempo}}">
                            
                            @error('tempo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label for="endereco" style="width: 100%; word-wrap: break-word; font-weight: bolder;">@lang('mensagens.Link do vídeo completo'):</label>
                            <input id="endereco" name="endereco" class="form-control @error('endereco') is-invalid @enderror" type="text" size="50px" value="{{$trecho->endereco_video}}">
                            
                            @error('endereco')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="padding: 2rem 0rem 2rem 0rem;">
                        <div class="col-sm-6">
                            <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; width: 100%;"><label class="campo_compartilhar_texto">@lang('mensagens.Cancelar')</label></button></a>                            
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-atualizar" style="border-width:2px; height: 40px;">@lang('mensagens.Salvar')</button>
                        </div>
                    </div>
                </form>
                </li>   
        </ul>
    </div>
</div>
@endif
<!-- Modal excluir HD-->
<div class="modal fade" id="modalExcluirHD" tabindex="-1" role="dialog" aria-labelledby="modalExcluirHD" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalExcluirHD">@lang('mensagens.Confirmar')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            @lang('mensagens.Confirmacao')
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('mensagens.Nao')</button>
            <a href="{{ route('delete.arquivoHD', ['id' => $trecho->id]) }}"><button type="button" class="btn btn-primary">@lang('mensagens.Sim')</button></a>
        </div>
    </div>
    </div>
</div>
<!-- Modal excluir SD-->
<div class="modal fade" id="modalExcluirSD" tabindex="-1" role="dialog" aria-labelledby="modalExcluirSD" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalExcluirSD">@lang('mensagens.Confirmar')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            @lang('mensagens.Confirmacao')
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('mensagens.Nao')</button>
        <a href="{{ route('delete.arquivoSD', ['id' => $trecho->id]) }}"><button type="button" class="btn btn-primary">@lang('mensagens.Sim')</button></a>
        </div>
    </div>
    </div>
</div>
@endsection