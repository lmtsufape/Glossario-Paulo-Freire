<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Videojs -->
    <link href="{{ asset('css/video-js.min.css') }}" rel="stylesheet"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/videojs-http-streaming.js') }}"></script>

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
                display: none;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 18px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.paulofreire.org/paulo-freire-patrono-da-educacao-brasileira" target="_blank" >Conheça Paulo Freire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('linhaDoTempo') }}">Linha do Tempo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.acervo.paulofreire.org:8080/jspui/;jsessionid=607561537830C73439872CFC1F751B44" target="_blank">Acervo Digital</a>
            </li>
            @auth
            <li class="nav-item dropdown" style="position: absolute; right: 30px;">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{ route('register') }}" class="dropdown-item">Novo Usuário</a>
                    <a href="{{ route('logout') }}" class="dropdown-item" type="button">Sair</a>
                </div>
            </li>
            @else
            <li class="nav-item" style="position: absolute; right: 30px;">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @endauth
        </div>
    </nav>
    
    <script src="{{ asset('js/videojs-resolution-switcher.js') }}"></script>
    
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
                        <div class="col-md-12"><a style="color: white; font-size: 15px; color: red;">INSTITUTO</a></div> 
                        <div class="col-md-12"><a style="color: white; font-size: 15px; color: blue;">PAULO FREIRE</a></div>
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: 1rem;"><a style="color: white; font-size: 15px;">Instituto de Educação e Direitos Humanos Paulo Freire</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="{{ route('glossario') }}" style="color: white;">Home</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/paulo-freire-patrono-da-educacao-brasileira" target="_blank" style="color: white;">Conheça Paulo Freire</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="{{ route('linhaDoTempo') }}" target="_blank" style="color: white;">Linha do Tempo</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="http://www.acervo.paulofreire.org:8080/jspui/;jsessionid=607561537830C73439872CFC1F751B44" target="_blank" style="color: white;">Acervo Digital</a></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><a href="http://biblioteca.paulofreire.org/" target="_blank" style="color: white;">Bibliotecas</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/glossario-audiovisual" target="_blank" style="color: white;">Glossário Paulo Freire</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/o-acervo-paulo-freire-apresentacao/17-unifreire/52-comunidade-freiriana-encontros-inter-f%C3%B3rum-paulo-freire" target="_blank" style="color: white;">Comunidade Freiriana Internacional</a></div>
                        <div class="col-md-12 rodape_texto" ><a href="https://www.paulofreire.org/" target="_blank" style="color: white;">Instituto Paulo Freire</a></div>   
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <a href="https://www.facebook.com/InstitutoPauloFreireIPF" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><img src="{{ asset('icones/facebook.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Facebook<label></div></a>
                        <a href="https://www.instagram.com/institutopaulofreire" target="_blank" style="color: white;"><div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/instagram.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Instagram</label></div></a>
                        <a href="mailto:ipf@paulofreire.org" style="color: white;"><div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/email.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">E-mail</label></div></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: -1rem;">
                            <img src="{{ asset('icones/UNESCO.png') }}" alt="Logo" width="134" height="134" />
                        </div>
                        <div class="col-md-12">
                            <label style="font-size: 10px; color: white;">Acervo reconhecido pela UNESCO</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top" style="padding-top: 1rem; padding-bottom: 1rem;">
                <div class="col-md-12">
                    <div class="row" style="text-align: left">
                        <!-- primeira coluna -->
                        <div class="col-md-1" style="color: white;">Parceria</div>
                        <div class="col-md-4">
                            <a href="http://www.ufrpe.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('icones/UFRPE.png') }}" alt="Logo" width="44" height="62" />
                                    </div>
                                    <div class="col-md-7">
                                        <a style="color: white; font-size: 15px">Universidade Federal Rural de Pernambuco</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- segunda coluna -->
                        <div class="col-md-4">
                            <a href="http://lmts.uag.ufrpe.br/" target="_blank" style="color: white;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('icones/LMTS.png') }}" alt="Logo" width="109" height="44" />
                                    </div>
                                    <div class="col-md-7">
                                        <label style="color: white; font-size: 15px;">Laboratório Multidisciplinar de Tecnologias Sociais</label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- terceira coluna -->
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <select class="custom-select custom-select-sm">
                                      <option selected>Selecione o idioma</option>
                                      <option value="1">Inglês(EUA)</option>
                                      <option value="2">Francês</option>
                                      <option value="3">Espanhol</option>
                                      <option value="4">Português (BRA)</option>
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
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- funcao lista_menu css -->
    <script type="text/javascript">
        var $li = $('#lista_menu li').click(function() {
            $li.removeClass('selected');
            $(this).addClass('selected');
        });
    </script>

</body>
</html>
