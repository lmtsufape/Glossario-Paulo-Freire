<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function glossario() {
        return view('glossario.glossario');
    }

    public function listarPalavras() {
        return view('glossario.lista_de_palavras');
    }
    
    public function pesquisa() {
        return view('glossario.pesquisa');
    }
}
