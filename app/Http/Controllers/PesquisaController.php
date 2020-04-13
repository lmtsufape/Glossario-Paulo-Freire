<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use DB;


class PesquisaController extends Controller
{
    public function novaPesquisa(Request $request) {
        $validated = $request->validate([
                'busca' => 'required',
        ]);
        
        $trechosVideos = DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                        ->select('trechos.*')
                        ->where([['verbetes.descricao', 'ilike', $request->box.'%'], ['tipo_recurso', '=', 'vídeo']])
                        ->get();

        $trechosAudios = DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                        ->select('trechos.*')
                        ->where([['verbetes.descricao', 'ilike', $request->box.'%'], ['tipo_recurso', '=', 'áudio']])
                        ->get();

        return view('glossario.pesquisa')->with(['resultado' => $request->box, 'trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios]);
        
    }

    public function novaPesquisaVideo(Request $request) {
        $validated = $request->validate([
            'busca' => 'required',
        ]);

        $trechosVideos = DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                    ->select('trechos.*')
                    ->where([['verbetes.descricao', 'ilike', $request->box.'%'], ['tipo_recurso', '=', 'vídeo']])
                    ->get();

        return view('glossario.pesquisa')->with(['trechosVideos' => $trechosVideos, 'resultado' => $request->box]);
        
    }

    public function novaPesquisaAudio(Request $request) {
        $validated = $request->validate([
            'busca' => 'required',
        ]);

        $trechosAudios = DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                        ->select('trechos.*')
                        ->where([['verbetes.descricao', 'ilike', $request->box.'%'], ['tipo_recurso', '=', 'áudio']])
                        ->get();

        return view('glossario.pesquisa')->with(['trechosAudios' => $trechosAudios, 'resultado' => $request->box]);       
    }
}
