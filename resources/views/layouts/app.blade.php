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

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts do video.js e videojs-resolution-swicher -->
    <link rel="stylesheet" type="text/css" href="{{ asset('video.js/dist/video-js.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('videojs-resolution-switcher/lib/videojs-resolution-switcher.css') }}">
    <style>
            .full-height {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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

            .vjs-resolution-button .vjs-icon-placeholder:before {
                content: '\f110';
                font-family: VideoJS;
                font-weight: normal;
                font-style: normal;
                font-size: 1.8em;
                line-height: 1.67em;
            }

            .vjs-resolution-button .vjs-resolution-button-label {
                font-size: 1em;
                line-height: 3em;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                text-align: center;
                box-sizing: inherit;
            }

            .vjs-resolution-button .vjs-menu .vjs-menu-content {
                width: 4em;
                left: 50%; /* Center the menu, in it's parent */
                margin-left: -2em; /* half of width, to center */
            }

            .vjs-resolution-button .vjs-menu li {
                text-transform: none;
                font-size: 1em;
            }
        </style>
</head>
<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light classNavBar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('imagens/logo_Colorida_institutoPF.png') }}" height="30">
                @lang('mensagens.Instituto Paulo Freire')
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon" onclick="mostrarOpcoes();"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" style="display: none">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">@lang('mensagens.Home')</a>
                <a class="nav-item nav-link" href="#">@lang('mensagens.O glossário')</a>
                <a class="nav-item nav-link" href="#">@lang('mensagens.Conheça Paulo Freire')</a>
                <a class="nav-item nav-link" href="{{ route('linhaDoTempo') }}">@lang('mensagens.Linha do Tempo')</a>
                <a class="nav-item nav-link" target="_blank" href="http://biblioteca.paulofreire.org/">@lang('mensagens.Biblioteca')</a>
                <a class="nav-item nav-link" target="_blank" href="http://www.acervo.paulofreire.org/">@lang('mensagens.Acervo')</a>
                @auth
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('register') }}" class="dropdown-item">@lang('mensagens.Novo usuário')</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" type="button">@lang('mensagens.Sair')</a>
                    </div>
                </div>
                @else
                <a class="nav-item nav-link" href="{{ route('login') }}">@lang('mensagens.Login')</a>
                @endauth
            </div>
            </div>

        </div>
    </nav>

    <!-- script do video.js -->
    <script src="{{ asset('video.js/dist/video.js') }}"></script>
    
    <!-- script do swich de qualidade de video -->
    <script src="{{ asset('videojs-resolution-switcher/lib/videojs-resolution-switcher.js') }}"></script>
    
    <!-- conteudo da pagina -->
    <main class="py-4">
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
                        <div class="col-md-12" style="margin-top:1rem; padding-bottom: 1rem;">
                            <img src=" {{ asset('icones/institutoPF.png') }}" alt="Logo" width="100" height="58" />
                        </div>
                        <div class="col-md-12"><a style="color: white; font-size: 15px; color: red;">@lang('mensagens.INSTITUTO')</a></div> 
                        <div class="col-md-12"><a style="color: white; font-size: 15px; color: blue;">@lang('mensagens.PAULO FREIRE')</a></div>
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: 1rem;"><a style="color: white; font-size: 15px;">@lang('mensagens.Instituto de Educação e Direitos Humanos Paulo Freire')</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="#" style="color: white;">@lang('mensagens.Home')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/paulo-freire-patrono-da-educacao-brasileira" target="_blank" style="color: white;">@lang('mensagens.Conheça Paulo Freire')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="{{ route('linhaDoTempo') }}" style="color: white;">@lang('mensagens.Linha do Tempo')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://www.acervo.paulofreire.org:8080/jspui/;jsessionid=607561537830C73439872CFC1F751B44" target="_blank" style="color: white;">@lang('mensagens.Acervo Digital')</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="http://biblioteca.paulofreire.org/" target="_blank" style="color: white;">@lang('mensagens.Biblioteca')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="{{ route('glossario') }}" style="color: white;">@lang('mensagens.Glossário Paulo Freire')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/o-acervo-paulo-freire-apresentacao/17-unifreire/52-comunidade-freiriana-encontros-inter-f%C3%B3rum-paulo-freire" target="_blank" style="color: white;">@lang('mensagens.Comunidade Freiriana Internacional')</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/" target="_blank" style="color: white;">@lang('mensagens.Instituto Paulo Freire')</a></div>   
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <a href="https://www.facebook.com/InstitutoPauloFreireIPF" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><img src="{{ asset('icones/facebook.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>Facebook</div></a>
                        <a href="https://www.instagram.com/institutopaulofreire" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/instagram.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>Instagram</div></a>
                        <a href="mailto:ipf@paulofreire.org" style="color: white;"><div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/email.svg') }}" alt="Logo" width="31,57" height="31.57" style="margin-right: 1rem;"/>E-mail</div></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: -1rem;">
                            <img src="{{ asset('icones/UNESCO.png') }}" alt="Logo" width="134" height="134" />
                        </div>
                        <div class="col-md-12">
                            <label style="font-size: 10px; color: white;">@lang('mensagens.Acervo reconhecido pela UNESCO')</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top" style="padding-top: 1rem; padding-bottom: 1rem;">
                <div class="col-md-12">
                    <div class="row" style="text-align: left">
                        <!-- primeira coluna -->
                        <div class="col-md-1" style="color: white;">@lang('mensagens.Parceria')</div>
                        <div class="col-md-4">
                            <a href="http://ww3.uag.ufrpe.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('icones/logo_ufape.svg') }}" alt="Logo" width="auto" height="75" />
                                    </div>
                                    <div class="col-md-7">
                                        <a href="http://ww3.uag.ufrpe.br/" target="_blank" style="color: white; font-size: 15px">@lang('mensagens.Universidade Federal do Agreste de Pernambuco')</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- segunda coluna -->
                        <div class="col-md-4">
                            <a href="http://lmts.uag.ufrpe.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('icones/LMTS.png') }}" alt="Logo" width="109" height="44" />
                                    </div>
                                    <div class="col-md-7">
                                        <a href="http://lmts.uag.ufrpe.br/" target="_blank" style="color: white; font-size: 15px;">@lang('mensagens.Laboratório Multidisciplinar de Tecnologias Sociais')</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- terceira coluna -->
                        <div class="col-md-2">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- funcao lista_menu css -->
    <script type="text/javascript">
        var $li = $('#lista_menu li').click(function() {
            $li.removeClass('selected');
            $(this).addClass('selected');
        });
    </script>
    <script>
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
    </script>
</body>
</html>
