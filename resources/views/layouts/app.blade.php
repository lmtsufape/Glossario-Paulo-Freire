<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <main class="py-4">
            @yield('content')
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

</body>
</html>
