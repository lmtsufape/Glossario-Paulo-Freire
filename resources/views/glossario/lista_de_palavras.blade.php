<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <title>Paulo Freire</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img  width="30" height="30" class="d-inline-block align-top" alt="">MENU</a>
    </nav>
    
    <div class="container">
          <div style="padding-top: 80px;">
              <div class="imagem_fundo" style="background-image: url(imagens/img_grande_50.png)">
                  <div class="card-body menu_glossario">
                      <div class="menu_glossario_design">
                          <div class="row" style="margin: 1rem">
                              <div class="col-md-12">
                                  <div class="row container">
                                      <div class="col-xs-2">
                                          <a href="" style="margin: 5px;">Glossário</a>
                                      </div>
                                      <div class="col-xs-2">
                                          <a href="" style="margin: 5px;">Pesquisa</a>
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
                                  <div style="float: right"><a href="">Listar todas as palavras</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        
       <div class="row">
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-1 letra">A</div>
                   <div class="col-md-10" style="margin-left: 1rem; margin-top: 10%; margin-bottom: 1rem;">
                        <ul class="list-group">
                          <li class="list-group-item lista_item" >
                                <div class="row">
                                    <div class="col-md-12"><label >Palavra 1</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                            <div class="row">
                                <div class="col-md-12"><label >Palavra 2</label></div>
                                <div class="col-md-12">
                                    <div class="btn-group">
                                        <div style="margin-right: 1rem;">
                                            <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                        <div>
                                            <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 3</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 4</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 5</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                        </ul>
                   </div>
               </div>
            </div>
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-1 letra">B</div>
                   <div class="col-md-10" style="margin-left: 1rem; margin-top: 10%; margin-bottom: 1rem;">
                        <ul class="list-group">
                          <li class="list-group-item lista_item" >
                                <div class="row">
                                    <div class="col-md-12"><label >Palavra 1</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                            <div class="row">
                                <div class="col-md-12"><label >Palavra 2</label></div>
                                <div class="col-md-12">
                                    <div class="btn-group">
                                        <div style="margin-right: 1rem;">
                                            <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                        <div>
                                            <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 3</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 4</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 5</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                        </ul>
                   </div>
               </div>
            </div>
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-1 letra">C</div>
                   <div class="col-md-10" style="margin-left: 1rem; margin-top: 10%; margin-bottom: 1rem;">
                        <ul class="list-group">
                          <li class="list-group-item lista_item" >
                                <div class="row">
                                    <div class="col-md-12"><label >Palavra 1</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                            <div class="row">
                                <div class="col-md-12"><label >Palavra 2</label></div>
                                <div class="col-md-12">
                                    <div class="btn-group">
                                        <div style="margin-right: 1rem;">
                                            <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                        <div>
                                            <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                            <label class="campo_compartilhar_texto">20.123</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 3</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 4</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                          <li class="list-group-item lista_item" >
                              <div class="row">
                                    <div class="col-md-12"><label >Palavra 5</label></div>
                                    <div class="col-md-12">
                                        <div class="btn-group">
                                            <div style="margin-right: 1rem;">
                                                <img src="icones/video.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                            <div>
                                                <img src="icones/audio.svg" alt="Logo" width="22,12" height="14,41" />
                                                <label class="campo_compartilhar_texto">20.123</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </li>
                        </ul>
                   </div>
               </div>
            </div>
       </div>
    </div>
    <!-- rodape -->
    <div class="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="row alinhamento_container">
                        <div class="col-md-12" style="margin-top:1rem; padding-bottom: 1rem;">
                            <img src="icones/institutoPF.png" alt="Logo" width="100" height="58" />
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
                        <div class="col-md-12 rodape_texto" style="margin-top: 1rem;"><img src="icones/facebook.svg" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Facebook<label></div>
                        <div class="col-md-12 rodape_texto" ><img src="icones/instagram.svg" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">Instagram</label></div>
                        <div class="col-md-12 rodape_texto" ><img src="icones/email.svg" alt="Logo" width="31,57" height="31.57" /><label style="margin-left: 1rem;">E-mail</label></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row" style="text-align: center">
                        <div class="col-md-12" style="margin-top: 1rem; margin-bottom: -1rem;">
                            <img src="icones/UNESCO.png" alt="Logo" width="134" height="134" />
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
                                    <img src="icones/UFRPE.png" alt="Logo" width="44" height="62" />
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
                                    <img src="icones/LMTS.png" alt="Logo" width="109" height="44" />
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