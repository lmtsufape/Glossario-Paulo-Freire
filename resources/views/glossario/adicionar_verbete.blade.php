@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 25px;">
        <div style="margin-left: 12px;"><a style="font-size: 25px; font-family:arial;">Adicionar um verbete</a></div>
    </div>
    <form action="{{ route('verbete.add.save') }}" method="POST">
        <div class="col-sm-12">
        @if ($errors->any())
            <div class="col-md-12" style="margin-top: 5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="col-sm-12">
            <ul class="list-group">
                <li class="list-group-item div_container">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12" style="padding-top: 1rem;">
                            <span style="width: 100%; word-wrap: break-word;">Nome:</span>
                            <input type="text" name="nome" style="width: 100%; word-wrap: break-word;"></input>
                        </div>
                        <div class="col-sm-12" style="padding: 1rem;">
                            <button type="submit" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><label class="campo_compartilhar_texto">Salvar</label></button>
                            <a href="javascript:history.back()"><button type="button" class="btn" style="border-color:#d5d5d5; border-width:2px; height: 40px; background-color: white;"><label class="campo_compartilhar_texto">Cancelar</label></button></a>                                 
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</div>
@endsection