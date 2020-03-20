<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarTrechoController extends Controller
{
    public function listar($id) {
        $verbete = \App\Verbete::find($id);
        $l = str_split($verbete->descricao)[0];
        $verbetes = \App\Verbete::where('descricao', 'ilike', $l.'%')->get();
        $trechos = \App\Trecho::where('verbete_id', $id)->get();
        return View('glossario.glossario')->with(['trechos' => $trechos, 'verbeteSelecionado' => $verbete, 'verbetes' => $verbetes, 'letraSelecionada' => $l]);
    }
}
