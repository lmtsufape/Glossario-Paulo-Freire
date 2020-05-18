@extends('layouts.app')

@section('content')
<style>
    /* #card {
        -webkit-transition: border 0.5s linear, -webkit-border-radius 0.5s linear;
    }
    #card:hover {
        border-right: 10px solid black;
        border-top: 10px solid black;
        -webkit-border-radius: 20px;
	} */
</style>
<div style="padding-top: 80px;">
    <div class="imagem_fundo" style="background-image: url({{asset('imagens/img_grande_50.png')}})">
        <div class="row card-body menu_glossario">
            <div id="card" class="menu_glossario_design row" style="background-color: rgb(5, 21, 51);">
                <div class="row" style="margin: 2rem;">
                    <div class="col-sm-12" style="text-indent: 1cm; text-align: justify; font-size: 15px; color: white;">
                        <p>
                            O Glossário audiovisual do educador Paulo Freire nasceu de uma demanda do Instituto Paulo Freire (SP), realizada em parceria com a Universidade Federal Rural de Pernambuco, atualmente Universidade Federal do Agreste de Pernambuco, por meio do Laboratório Multidisciplinar de Tecnologias Sociais.
                        </p>
                        <p>
                            Foram identificados vídeos e áudios do educador, editados conteúdos audiovisuais e preparado espaço virtual para disponibilização do glossário.
                        </p>
                        <p>
                            Com a realização desta iniciativa, esperamos oferecer como resultados da realização deste projeto contribuições para a formação inicial e continuada de estudantes, professores e interessados acerca da vida, obra e ao legado do patrono da Educação Brasileira e patrimônio educacional pernambucano, a disseminação da vida, obra e legado de Paulo Freire e a melhoria da qualidade sociocultural e socioambiental da educação pública.
                        </p>
                        <p>
                            O glossário é composto, atualmente, por mais de trezentos verbetes, sendo estes abordados pelo educador em diferentes temáticas tanto educacional como experiências de vida compartilhadas por Freire.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection