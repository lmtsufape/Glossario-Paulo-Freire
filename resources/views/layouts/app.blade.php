<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <!-- Fonts do video.js e videojs-resolution-swicher -->
    <link href="{{ asset('video.js/node_modules/video.js/dist/video-js.min.css')}}" rel="stylesheet"/>

    <link href="{{ asset('video.js/node_modules/videojs-resolution-switcher/lib/videojs-resolution-switcher.css')}}" rel="stylesheet"/> --}}

    {{-- css do player de video e audio --}}
    <link rel="stylesheet" href="{{ asset('jlplayer-custom/jlplayer.css')}} ">
    <link rel="stylesheet" href="{{ asset('player-audio/player_audio.css') }} ">
    <style>
            @font-face {
                font-family: 'Segoe-ui';
                font-style: normal;
                font-weight: normal;
                src: url({{ asset('fonts/segoe-ui.otf') }});
            }

            @font-face {
                font-family: 'Segoe-ui-ie';
                font-style: normal;
                font-weight: normal;
                src: url({{ asset('fonts/segoe-ui.eot') }});
            }

            .full-height {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Segoe-ui', 'Segoe-ui-ie', serif;
                font-weight: 200;
                height: 10vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .flex-start {
                align-items: start;
                display: flex;
                justify-content: start;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* botões */
            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #464646;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(97, 97, 97, 0.25);
            }

            .btn:focus, .btn.focus {
                box-shadow: 0 0 0 0.2rem #b8b8b8;
            }

            .btn-primary:focus, .btn-primary.focus {
                box-shadow: 0 0 0 0.2rem #b8b8b8;
            }

            .custom-file-input:focus ~ .custom-file-label {
                border-color: #464646;
                box-shadow: 0 0 0 0.2rem #b8b8b8;
            }

            /* editar trecho */
            .btn-atualizar {
                width: 100%;
                border-radius: 5px;
                border-color: #d5d5d5;
                box-shadow: black;
                color: white;
                background-color: rgb(10, 173, 64);
            }

            *{
                font-family: 'Segoe-ui', 'Segoe-ui-ie', serif;
            }
        </style>

        <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">
</head>
<body>  
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light classNavBar" style="font-weight: bolder;">
        <div class="container">
            <a class="navbar-brand" href="http://memorial.paulofreire.org/">
                <img src="{{ asset('imagens/MVPF_M.png') }}" width="200px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon" onclick="mostrarOpcoes();"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" style="display: none">
            <div class="navbar-nav" style="font-size: 12px;">
                <a class="nav-item nav-link" href="{{ route('glossario') }}">@lang('mensagens.Home')</a>
                <a class="nav-item nav-link" href="http://memorial.paulofreire.org/">@lang('mensagens.Conheça Paulo Freire')</a>
                <a class="nav-item nav-link" href="http://memorial.paulofreire.org/">@lang('mensagens.Linha do Tempo')</a>
                <a class="nav-item nav-link" href="{{ route('o.glossario') }}">@lang('mensagens.O glossário')</a>
                <a class="nav-item nav-link" target="_blank" href="http://acervo.paulofreire.org/">@lang('mensagens.Acervo Digital')</a>
                <a class="nav-item nav-link" target="_blank" href="http://biblioteca.paulofreire.org/">@lang('mensagens.Biblioteca')</a>
                <a class="nav-item nav-link" target="_blank" href="http://paulofreire.org/unifreire/">@lang('mensagens.Comunidade Freiriana')</a>
                <a class="nav-item nav-link" href="mailto:ipf@paulofreire.org">@lang('mensagens.Contato')</a>
                @auth
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth()->user()->email === "admin@ufape.edu.br")
                            <a href="{{ route('register') }}" class="dropdown-item">@lang('mensagens.Novo usuário')</a>
                        @endif
                        <a href="{{ route('logout') }}" class="dropdown-item" type="button">@lang('mensagens.Sair')</a>
                    </div>
                </div>
                @else
                {{-- <a class="nav-item nav-link" href="{{ route('login') }}">@lang('mensagens.Login')</a> --}}
                @endauth
            </div>
            </div>

        </div>
    </nav>

    {{-- <!-- script do video.js -->
    <script src="{{ asset('video.js/node_modules/video.js/dist/video.js')}}"></script>
    
    <!-- script do swich de qualidade de video -->
    <script src="{{ asset('video.js/node_modules/videojs-resolution-switcher/lib/videojs-resolution-switcher.js')}}"></script> --}}
    
    <!-- conteudo da pagina -->
    <main class="py-4" style="margin-bottom: 2rem;">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!-- rodape -->
    <div class="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row alinhamento_container">
                        <div class="row" style="justify-items: center">
                            <div class="col-sm-12" style="margin-top: 1rem; margin-bottom: 1rem;">
                                <a href="https://www.paulofreire.org/" target="_blank"><img src="{{ asset('imagens/logo-instituto.png') }}" alt="Logo" width="auto" height="170px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="http://memorial.paulofreire.org/" style="color: white;">@lang('mensagens.Memorial Paulo Freire')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://memorial.paulofreire.org/" target="_blank" style="color: white;">@lang('mensagens.Conheça Paulo Freire')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://memorial.paulofreire.org/" style="color: white;">@lang('mensagens.Linha do Tempo')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://acervo.paulofreire.org/" target="_blank" style="color: white;">@lang('mensagens.Acervo Digital')</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="http://biblioteca.paulofreire.org/" target="_blank" style="color: white;">@lang('mensagens.Biblioteca')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="{{ route('glossario') }}" style="color: white;">@lang('mensagens.Glossário Paulo Freire')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://paulofreire.org/unifreire/" target="_blank" style="color: white;">@lang('mensagens.Comunidade Freiriana')</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto" style="padding-top: 15px;">
                        <a href="https://www.facebook.com/InstitutoPauloFreireIPF" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" style=""><img src="{{ asset('icones/facebook.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>Facebook</div></a>
                        <a href="https://www.instagram.com/institutopaulofreire" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" style=""><img src="{{ asset('icones/instagram.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>Instagram</div></a>
                        <a href="mailto:ipf@paulofreire.org" style="color: white;"><div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/email.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>E-mail</div></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: -2rem;">
                            <a id="acervoReconhecido" href="https://nacoesunidas.org/" target="_blank"><img src="{{ asset('icones/UNESCO.png') }}" alt="Logo" width="auto" height="170px" /></a>
                        </div>
                        <div class="col-md-12">
                            <label for="acervoReconhecido" style="font-size: 10px; color: white;">@lang('mensagens.Acervo reconhecido pela UNESCO')</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top" style="padding-top: 1rem; padding-bottom: 1rem;">
                <div class="col-md-12">
                    <div class="row" style="text-align: left">
                        <!-- primeira coluna -->
                        <div class="col-md-1" style="color: white;">@lang('mensagens.Parceria'):</div>
                        <div class="col-md-2">
                            <a href="http://www.ufape.edu.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <img src="{{ asset('imagens/logo_site_ufape.png') }}" alt="Logo" width="auto" height="80px" />
                                    </div>
                                    {{-- <div class="col-md-9" style="padding-top: 20px; padding-bottom: 20px;">
                                        @lang('mensagens.Universidade Federal do Agreste de Pernambuco')
                                    </div> --}}
                                </div>
                            </a>
                        </div>
                        <!-- segunda coluna -->
                        <div class="col-sm-1" style="color: white; margin-right: 50px;">@lang('mensagens.Desenvolvimento'):</div>
                        <div class="col-md-4" style="padding-top: 20px;">
                            <a href="http://lmts.uag.ufrpe.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-4" style="padding-bottom: 20px;">
                                        <img src="{{ asset('icones/LMTS.png') }}" alt="Logo" width="109" height="44" />
                                    </div>
                                    <div class="col-md-8">
                                        @lang('mensagens.Laboratório Multidisciplinar de Tecnologias Sociais')
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- terceira coluna -->
                        <div class="col-md-3" style="padding-top: 30px; padding-bottom: 20px;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <select id="selecionarIdioma" class="custom-select custom-select-sm" onchange="mudarIdioma()">
                                        <option value="pt-BR" selected>@lang('mensagens.Selecione o idioma')</option>
                                        <option value="en">@lang('mensagens.Inglês(EUA)')</option>
                                        <option value="fr">@lang('mensagens.Francês')</option>
                                        <option value="es">@lang('mensagens.Espanhol')</option>
                                        <option value="pt-BR">@lang('mensagens.Português (BRA)')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </div>

    {{-- scripts do player de video e audio --}}

    <script src="{{ asset('jlplayer-custom/jlplayer.js') }}"></script>
    <script src="{{ asset('player-audio/player-audio.js') }}"></script>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    
    <script>
        //funcao lista_menu css

        var $li = $('#lista_menu li').click(function() {
            $li.removeClass('selected');
            $(this).addClass('selected');
        });

        //Funcao para abrir/fechar aba do menu
		function mostrarOpcoes(){
			if(document.getElementById("navbarNavAltMarkup").style.display == 'none'){
				document.getElementById("navbarNavAltMarkup").style.display = 'block';
			}else{
				document.getElementById("navbarNavAltMarkup").style.display = 'none';
			}

        }
        
        function mudarIdioma() {
            var localizacao = document.getElementById('selecionarIdioma');
            
            if (localizacao.value == "pt-BR") {
                window.location.href = "{{ url('') }}";
            } else if (localizacao.value == "en") {
                window.location.href = "{{ url('') }}/en";
            } else if (localizacao.value == "es") {
                window.location.href = "{{ url('') }}/es";
            } else if (localizacao.value == "fr") {
                window.location.href = "{{ url('') }}/fr";
            } else {
                window.location.href = "{{ url('') }}";
            }
        }
        
        // funções para troca de qualidade de video
        function mudarParaHD(button) {
            var container_video = document.getElementById($(button).parent().parent().attr('id'));
            var tempo = container_video.children[0].currentTime;
            container_video.children[0].src = container_video.children[0].children[4].value;
            container_video.children[0].currentTime = tempo;
            container_video.children[2].style.display = "none";
            container_video.children[4].children[0].innerHTML = '<svg viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"/></svg><span class="jlplayer-tooltip">Pausar</span>';
            container_video.children[0].play();
        }
        function mudarParaSD(button) {
            var container_video = document.getElementById($(button).parent().parent().attr('id'));
            var tempo = container_video.children[0].currentTime;
            container_video.children[0].src = container_video.children[0].children[5].value;
            container_video.children[0].currentTime = tempo;
            container_video.children[2].style.display = "none";
            container_video.children[4].children[0].innerHTML = '<svg viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"/></svg><span class="jlplayer-tooltip">Pausar</span>';
            container_video.children[0].play();
        }

        function mudarAudioParaHD(button) {
            var audio = document.getElementById($(button).parent().parent().attr('id'));
            var tempo = audio.children[0].currentTime;
            audio.children[0].src = audio.children[0].children[5].value;
            audio.parentElement.style.backgroundImage = audio.children[0].children[7].value.split(" ")[0];
            audio.parentElement.style.backgroundSize = audio.children[0].children[7].value.split(" ")[1] + " " + audio.children[0].children[7].value.split(" ")[2];
            audio.parentElement.style.paddingBottom = audio.children[0].children[7].value.split(" ")[3];
            audio.children[0].currentTime = tempo;
            audio.children[2].style.display = "none";
            audio.children[3].children[0].innerHTML = '<svg viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"/></svg><span class="player-audio-tooltip">Pausar</span>';
            audio.children[0].play();
        }
        function mudarAudioParaSD(button) {
            var audio = document.getElementById($(button).parent().parent().attr('id'));
            var tempo = audio.children[0].currentTime;
            audio.children[0].src = audio.children[0].children[6].value;
            audio.parentElement.style.backgroundImage = audio.children[0].children[7].value.split(" ")[0];
            audio.parentElement.style.backgroundSize = audio.children[0].children[7].value.split(" ")[1] + " " + audio.children[0].children[7].value.split(" ")[2];
            audio.parentElement.style.paddingBottom = audio.children[0].children[7].value.split(" ")[3];
            audio.children[0].currentTime = tempo;
            audio.children[2].style.display = "none";
            audio.children[3].children[0].innerHTML = '<svg viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"/></svg><span class="player-audio-tooltip">Pausar</span>';
            audio.children[0].play();
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>
