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
        </style>
</head>
<body>
    <div class="flex-start position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                    <a href="#">{{auth()->user()->name}}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Novo Usuário</a>
                    @endif
                    <a href="{{ route('logout') }}">Sair</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        @endif
        <nav class="navbar navbar-light full-height">
            <a class="navbar-brand" href="#">
            <img  width="30" height="30" class="d-inline-block align-top" alt="">MENU</a>
        </nav>
    </div>
    
    

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
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;">Home</div>
                        <div class="col-md-12 rodape_texto" >Conheça Paulo Freire</div>
                        <div class="col-md-12 rodape_texto" >Linha do Tempo</div>
                        <div class="col-md-12 rodape_texto" >Acervo Digital</div>
                    </div>
                        <hr size="300" width="1" align="left" style="background-color: white">
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;">Bibliotecas</div>
                        <div class="col-md-12 rodape_texto" >Glossário Paulo Freire</div>
                        <div class="col-md-12 rodape_texto" >Comunidade Freiriana Internacional</div>
                        <div class="col-md-12 rodape_texto" >Instituto Paulo Freire</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row alinhamento_container_texto">
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><img src="{{ asset('icones/facebook.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Facebook<label></div>
                        <div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/instagram.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Instagram</label></div>
                        <div class="col-md-12 rodape_texto" ><img src="{{ asset('icones/email.svg') }}" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">E-mail</label></div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('icones/UFRPE.png') }}" alt="Logo" width="44" height="62" />
                                </div>
                                <div class="col-md-7">
                                    <a style="color: white; font-size: 15px">Universidade Federal Rural de Pernambuco</a>
                                </div>
                            </div>
                        </div>
                        <!-- segunda coluna -->
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('icones/LMTS.png') }}" alt="Logo" width="109" height="44" />
                                </div>
                                <div class="col-md-7">
                                    <label style="color: white; font-size: 15px;">Laboratório Multidisciplinar de Tecnologias Sociais</label>
                                </div>
                            </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
