@extends('layouts.app')

@section('content')    
<div style="background-color: white;">
    <div class="container-fluid">
        <div id="titulos">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-2 coluna_vermelha"> 
                </div>
                <div class="col-md-6"> 
                    <div class="titulos">
                        <h1 style="font-size: 80px; color: rgba(0, 0, 0, 0.8);">LINHA DO TEMPO</h1>
                        <h2 style="font-weight: 800; font-size: 60px; color: rgba(255, 0, 0, 0.8);">PAULO FREIRE</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="conteudo1">
            <div class="row">
                <div class="col-md-4">
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito">PAULO FREIRE <span class="titulo_vermelho_negrito">NASCEU</span> EM SETEMBRO DE 1921 NO RECIFE</h3>
                    <p class="direito paragrafo">
                        Paulo Reglus Neves Freire nasceu em 19 de setembro de 1921 no Recife, capital do estado  brasileiro de Pernambuco. </br>
                    </p>
                </div>
                    <div class="col-md-2 coluna_vermelha texto_italico_central">
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1919
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1920
                        </div>
                        <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                            1921
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1922
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1923
                        </div>
                    </div>
                <div class="col-md-6">
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_01.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo2">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_02.PNG') }}" width="90%">
                </div>
                    <div class="col-md-2 coluna_vermelha texto_italico_central">
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1927
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1928
                        </div>
                        <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                            1929
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1930
                        </div>
                        <div class="row justify-content-center ano_acizentado_negrito">
                            1931
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="row box_ano"></div> 
                    <h3 class="titulo_preto_negrito"><span class="titulo_vermelho_negrito">DEPRESSÃO</br></span> DE 1929</h3>
                    <p class="paragrafo">
                        Sua família fazia parte da classe média, mas Paulo Freire vivenciou a pobreza e a fome na infância durante a depressão de 1929, uma experiência que o levaria a se preocupar com os mais pobres e o ajudaria a construir seu revolucionário método de alfabetização. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo3">
            <div class="row">
                <div class="col-md-4">
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito">CURSA <span class="titulo_vermelho_negrito">DIREITO</span> NA UNIVERSIDADE DO RECIFE</h3>
                    <p class="direito paragrafo">
                        Paulo Freire ingressa na Faculdade de Direito do Recife. Naquela época, o curso de direito era a única alternativa na área de ciências humanas. Nesse período, conheceu a professora primária Elza Maia Costa Oliveira... </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1941
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1942
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1943
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1944
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1945
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_03.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo4">
            <div class="row">
                <div class="col-md-4 direito"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_04.PNG') }}" width="70%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1942
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1943
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1944
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1945
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1946
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito ">EM 1944 UNI-SE EM <span class="titulo_vermelho_negrito">MATRIMÔNIO</span></h3>
                    <p class="paragrafo">
                        Paulo Freire ingressa na Faculdade de Direito do Recife. Naquela época, o curso de direito era a única alternativa na área de ciências humanas. Nesse período, conheceu a professora primária Elza Maia Costa Oliveira... </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo5">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito">INDICADO AO CARGO DE <span class="titulo_vermelho_negrito">DIRETOR DO DEPARTAMENTO DE EDUCAÇÃO E CULTURA DO SERVIÇO SOCIAL</span> NO ESTADO DE PERNAMBUCO</h3>
                    <p class="direito paragrafo">
                        Paulo Freire assume o cargo de Diretor do Departamento de Educação e Cultura do Serviço Social, onde travou contato com a questão da educação de adultos/trabalhadores e percebeu a necessidade de executar um trabalho direcionado à alfabetização. </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1944
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1945
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1946
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1947
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1948
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_05.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo6">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_06.PNG') }}" width="90%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1959
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1960
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1961
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1962
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1963
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito ">CONSTRUÇÃO DO </br><span class="titulo_vermelho_negrito">MÉTODO PAULO FREIRE</span></h3>
                    <p class="paragrafo">
                        Em 1961 tornou-se diretor do Departamento de Extensões Culturais da Universidade do Recife e, no mesmo ano, realizou junto com sua equipe as primeiras experiências de alfabetização popular que levariam à constituição do Método Paulo Freire. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo7">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito">PRIMEIRAS <span class="titulo_vermelho_negrito">EXPERIÊNCIAS</span></h3>
                    <p class="direito paragrafo">
                        Seu equipe foi responsável pela alfabetização de 300 cortadores de cana em apenas 45 dias. </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1961
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1962
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1963
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1964
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1965
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_07.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo8">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_08.PNG') }}" width="90%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1962
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1963
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1964
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1965
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1966
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito "><span class="titulo_vermelho_negrito">GOLPE</br></span> MILITAR</h3>
                    <p class="paragrafo">
                        Em 1964, meses depois de iniciada a implantação do Plano, o golpe militar extinguiu esse esforço. Freire foi encarcerado como traidor por 70 dias. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo9">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito"><span class="titulo_vermelho_negrito">EXÍLIO</br></span> NO CHILE</h3>
                    <p class="direito paragrafo">
                        Durante o exílio, Paulo Freire passou pela Bolívia e trabalhou no Chile por cinco anos para o Movimento de Reforma Agrária da Democracia Cristã e para a Organização das Nações Unidas para a Agricultura e a Alimentação. </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1965
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1966
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1967
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1968
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1969
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_09.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo10">
            <div class="row">
                <div class="col-md-4 direito"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_10.PNG') }}" width="70%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1966
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1967
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1968
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1969
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1970
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito ">CONCLUSÃO DO LIVRO <span class="titulo_vermelho_negrito">PEDAGOGIA DO OPRIMIDO</span></h3>
                    <p class="paragrafo">
                        No ano anterior, ele havia concluído a redação de seu mais famoso livro, Pedagogia do Oprimido, que foi publicado em várias línguas como o espanhol, o inglês (em 1970) e até o hebraico (em 1981). </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo11">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito">PROFESSOR VISITANTE DA <span class="titulo_vermelho_negrito">UNIVERSIDADE DE HARVARD</span></h3>
                    <p class="direito paragrafo">
                        Freire foi convidado para ser professor visitante da Universidade Harvard em 1969. Nesse período, conheceu a professora primária Elza Maia Costa Oliveira... </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1967
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1968
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1969
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1970
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1971
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_11.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo12">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_12.PNG') }}" width="90%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1978
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1979
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1980
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1981
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1982
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito "><span class="titulo_vermelho_negrito">RETORNO</br></span> AO BRASIL</h3>
                    <p class="paragrafo">
                        Com a Anistia em 1979 Freire pôde retornar ao Brasil, mas só o fez em 1980. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo13">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito"><span class="titulo_vermelho_negrito">PRESIDENTE</span> DA 1º DIRETORIA EXECUTIVA DA FUNDAÇÃO WILSON PINHEIRO</h3>
                    <p class="direito paragrafo">
                        Integrou o Partido dos Trabalhadores, tendo sido Presidente da 1ª Diretoria Executiva da Fundação Wilson Pinheiro, fundação de apoio partidária instituída pelo PT em 1981 (antecessora da Fundação Perseu Abramo). </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1979
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1980
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1981
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1982
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1983
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_13.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo14">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_14.PNG') }}" width="70%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1987
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1988
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1989
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1990
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1991
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito "><span class="titulo_vermelho_negrito">SECRETÁRIO DE EDUCAÇÃO</span> DA PREFEITURA DE SÃO PAULO</h3>
                    <p class="paragrafo">
                        Freire foi nomeado secretário de Educação da cidade de São Paulo. Exerceu esse cargo de 1989 a 1991. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo15">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito direito"><span class="titulo_vermelho_negrito">FUNDAÇÃO</span> PAULO FREIRE</h3>
                    <p class="direito paragrafo">
                        Em 1991, o Instituto Paulo Freire foi criado em São Paulo para ampliar e elaborar as suas teorias da educação popular. O instituto já tem projetos em muitos países e está sediada na Escola de Educação e Estudos de Informação da Universidade da Califórnia em Los Angeles (UCLA), onde arquivos de Freire são mantidos. </br>
                    </p>
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1989
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1990
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1991
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1992
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1993
                    </div>
                </div>
                <div class="col-md-6"> 
                    <img class="imagem_direita" src="{{ asset('imagens/linha_do_tempo_15.PNG') }}" width="90%">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="conteudo16">
            <div class="row">
                <div class="col-md-4 direito"> 
                    <img class="imagem_esquerda" src="{{ asset('imagens/linha_do_tempo_16.PNG') }}" width="80%">
                </div>
                <div class="col-md-2 coluna_vermelha texto_italico_central">
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1987
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1988
                    </div>
                    <div class="row justify-content-center fundo_preto ano_destacado_negrito">
                        1989
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1990
                    </div>
                    <div class="row justify-content-center ano_acizentado_negrito">
                        1991
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="row box_ano"></div>
                    <h3 class="titulo_preto_negrito ">PAULO FREIRE <span class="titulo_vermelho_negrito">MORRE</span> AOS 70 ANOS</h3>
                    <p class="paragrafo">
                        Freire morreu de um ataque cardíaco em 2 de maio de 1997, às 6h53, no Hospital Albert Einstein, em São Paulo. </br>
                    </p>
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
        <div id="espaco">
            <div class="row">
                <div class="col-md-4 box">
                </div>
                <div class="col-md-2 coluna_vermelha box">
                </div>
                <div class="col-md-6 box">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection