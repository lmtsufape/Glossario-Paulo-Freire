<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarVerbeteController extends Controller
{
    public function listar($l) {
        $verbetes = \App\Verbete::where('descricao', 'ilike', $l.'%')->orderBy('descricao')->get();
        return View('glossario.glossario')->with(['verbetes' => $verbetes, 'letraSelecionada' => $l]);
        
    }
}
