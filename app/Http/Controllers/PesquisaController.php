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

        $trechosVideos = $this->videos($request);
        $trechosAudios = $this->audios($request);

        return view('glossario.pesquisa')->with(['resultado' => $request->busca, 'trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios, 'query' => $request->busca]);
        
    }

    public function novaPesquisaVideo(Request $request) {
        $validated = $request->validate([
            'busca' => 'required',
        ]);

        $trechosVideos = $this->videos($request);

        return view('glossario.pesquisa')->with(['resultado' => $request->busca, 'trechosVideos' => $trechosVideos, 'query' => $request->busca]);
        
    }

    public function novaPesquisaAudio(Request $request) {
        $validated = $request->validate([
            'busca' => 'required',
        ]);
        $trechosAudios = $this->audios($request);

        return view('glossario.pesquisa')->with(['resultado' => $request->busca, 'trechosAudios' => $trechosAudios, 'query' => $request->busca]);       
    }

    public function audios(Request $request) {
        return DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                    ->select('trechos.*')
                    ->where([['verbetes.descricao', 'ilike', $request->busca.'%'], ['tipo_recurso', '=', 'áudio']])
                    ->get();
    }

    public function videos(Request $request) {
        return DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                    ->select('trechos.*')
                    ->where([['verbetes.descricao', 'ilike', $request->busca.'%'], ['tipo_recurso', '=', 'vídeo']])
                    ->get();
    }
}
