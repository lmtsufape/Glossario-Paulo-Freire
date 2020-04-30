@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
            <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Adicionar trecho</a></div>
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
                                    Arquivo de áudio: </br>
                                </div>

                                <div class="row" id="paragrafoVideo" style="display: none;">
                                    <img src="{{ asset('imagens/imagem_video.png') }}" alt="paper" style="width: auto; max-width: 100%;">
                                    Arquivo de vídeo em HD: </br>
                                    <input type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_hd" id="arquivo_hd" style=""></input>
                                    </br>
                                    Arquivo de vídeo em SD: </br>
                                </div>
                                <input type="file" accept=".mp4,.mkv,.ogv,.webm" name="arquivo_sd" id="arquivo_sd" style="display: none;"></input>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-top: 1rem;">
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">Texto:</span>
                                            <textarea name="texto" rows="8" cols="90" style="width: 100%; word-wrap: break-word;" required></textarea>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">Titulo:</span><br>
                                            <input name="titulo_video" type="text" size="50px" value="" required></input>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">Tipo de recurso:</span><br>
                                                <select id="tipo_recurso" name="tipo_recurso" onchange="mudar()" required>
                                                    <option value=""></option>
                                                    <option value="áudio">Áudio</option>
                                                    <option value="vídeo">Vídeo</option>
                                                </select>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">Tempo:</span><br>
                                            <input name="tempo" type="text" size="50px" value="" required></input>
                                        </p>
                                        <p>
                                            <span style="width: 100%; word-wrap: break-word;">Link do áudio/vídeo completo:</span><br>
                                            <input name="endereco_video" type="text" size="50px" value="" required></input>
                                        </p>
                                    </div>
                                    <div class="col-sm-12" style="padding: 1rem;">
                                        <button type="submit" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; color: #acabab;">Salvar</button>
                                        <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white; color: #acabab;">Cancelar</button></a>                                   
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
            document.getElementById('arquivo_sd').accept = ".mp3,.mp4,.m4a,.ogg,.flac";
            document.getElementById('arquivo_sd').style.display = 'inline';
        } else if (combobox.value == "vídeo") {
            document.getElementById('paragrafoAudio').style.display = 'none';
            document.getElementById('paragrafoVideo').style.display = 'inline';
            document.getElementById('arquivo_sd').accept = ".mp4,.mkv,.ogv,.webm";
            document.getElementById('arquivo_sd').style.display = 'inline';
        } else {
            document.getElementById('paragrafoAudio').style.display = 'none';
            document.getElementById('paragrafoVideo').style.display = 'none';
            document.getElementById('arquivo_sd').accept = '';
            document.getElementById('arquivo_sd').style.display = 'none';
            
        }
    }
</script>
@endsection