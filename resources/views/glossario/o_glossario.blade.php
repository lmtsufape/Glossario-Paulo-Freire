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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection