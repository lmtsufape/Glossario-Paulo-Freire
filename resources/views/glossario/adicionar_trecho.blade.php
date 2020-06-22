@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
            <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">@lang('mensagens.Adicionar trecho')</a></div>
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
        </div>
            <ul class="list-group">
                    <li class="list-group-item div_container">
                    <form action="{{ route('trecho.add.save', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="row" id="paragrafoAudio" style="display: none;">
                                    <img src="{{ asset('imagens/imagem_audio.png') }}" alt="paper" style="width: auto; max-width: 100%;">
                                    @lang('mensagens.audioHD'): <br>
                                    <input type="file" accept=".mp3,.mp4,.m4a,.ogg,.flac" name="arquivo_hd_audio" id="arquivo_hd">
                                    <br>
                                    @lang('mensagens.audioSD'): <br>
                                    <input type="file" accept=".mp3,.mp4,.m4a,.ogg,.flac" name="arquivo_sd_audio" id="arquivo_sd">
                                </div>

                                <p class="row" id="paragrafoVideo" style="display: none;">
                                    <img src="{{ asset('imagens/imagem_video.png') }}" alt="paper" style="width: 430px; max-width: 100%;">
                                    @lang('mensagens.HD'): <br>
                                    <input type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_hd_video" id="arquivo_hd">
                                    <br>
                                    @lang('mensagens.SD'): <br>
                                    <input type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_sd_video" id="arquivo_sd">
                                </p>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">@lang('mensagens.Texto'):</span>
                                            <textarea name="texto" rows="8" cols="90" style="width: 100%; word-wrap: break-word;" required></textarea>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">@lang('mensagens.Titulo'):</span><br>
                                            <input name="titulo_video" type="text" size="50px" value="" required>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">@lang('mensagens.Tipo de recurso'):</span><br>
                                                <select id="tipo_recurso" name="tipo_recurso" onchange="mudar()" required>
                                                    <option value=""></option>
                                                    <option value="áudio">@lang('mensagens.Áudio')</option>
                                                    <option value="vídeo">@lang('mensagens.Vídeo')</option>
                                                </select>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">@lang('mensagens.Tempo'):</span><br>
                                            <input name="tempo" type="text" size="50px" value="" required>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">@lang('mensagens.Link do áudio/vídeo completo'):</span><br>
                                            <input name="endereco_video" type="text" size="50px" value="" required>
                                        </p>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <button type="submit" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; color: #acabab;">@lang('mensagens.Salvar')</button>
                                        <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; color: #acabab;">@lang('mensagens.Cancelar')</button></a>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </li>   
            </ul>
        </div>
</div>

<script>

    // função para esconder e exibir as imagens e inputs dos videos e audios pelo combobox
    function mudar() {
        var combobox = document.getElementById('tipo_recurso');

        if (combobox.value == "áudio") {
            document.getElementById('paragrafoAudio').style.display = 'inline';
            document.getElementById('paragrafoVideo').style.display = 'none';
        } else if (combobox.value == "vídeo") {
            document.getElementById('paragrafoAudio').style.display = 'none';
            document.getElementById('paragrafoVideo').style.display = 'inline';
        }
    }
</script>
@endsection