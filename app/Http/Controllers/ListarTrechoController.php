<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarTrechoController extends Controller
{
    public function listar($id) {
        $verbete = \App\Verbete::find($id);
        $l = str_split($verbete->descricao)[0];
        $verbetes = \App\Verbete::where('descricao', 'ilike', $l.'%')->get();
        $trechosVideos = \App\Trecho::where([['verbete_id', '=', $id], ['tipo_recurso', '=', 'vídeo']])->get();
        $trechosAudios = \App\Trecho::where([['verbete_id', '=', $id], ['tipo_recurso', '=', 'áudio']])->get();
        return View('glossario.glossario')->with(['trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios, 'verbeteSelecionado' => $verbete, 'verbetes' => $verbetes, 'letraSelecionada' => $l]);
    }
}
