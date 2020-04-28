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
                            <div style="float: right">
                                @auth<a href="{{ route('verbete.add') }}">Adicionar verbete</a> &nbsp; 
                                @endauth
                                <a href=" {{ route('listarPalavras') }} ">Listar todas as palavras</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($letras as $letra)
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-1 letra">{{$letra->l}}</div>
        <div class="col-md-10" style="margin-left: 1rem; margin-top: 10%; margin-bottom: 1rem;">
                <ul class="list-group">
                @foreach ($verbetes as $verbete)
                    @if (str_split($verbete->descricao)[0] == $letra->l)
                    <a href="{{ route('verbete', ['id' => $verbete->id]) }}">
                        <li class="list-group-item lista_item" >
                                <div class="row">
                                    <div class="col-md-12"><label >{{$verbete->descricao}}</label></div>
                                        <div class="col-md-12">
                                            <div class="btn-group">
                                                <div style="margin-right: 1rem;">
                                                    <img src="{{ asset('icones/trechos.svg') }}" alt="Logo" width="25" height="25"/><label class="campo_compartilhar_texto">{{$verbete->count}}</label>
                                                </div>
                                                <!-- <div style="margin-right: 1rem;">
                                                    <img src="{{ asset('icones/video.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                                    <label class="campo_compartilhar_texto">20.123</label>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('icones/audio.svg') }}" alt="Logo" width="22,12" height="14,41" />
                                                    <label class="campo_compartilhar_texto">20.123</label>
                                                </div> -->
                                            </div>
                                        </div>
                                </div>
                        </li>
                    </a>
                    @endif
                @endforeach
        </div>
    </div>
    </div>
    @endforeach
</div>
@endsection