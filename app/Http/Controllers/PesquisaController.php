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
            'buscaTodos' => 'nullable',
            'buscaAudio' => 'nullable',
            'buscaVideo' => 'nullable',
        ]);

        $trechosVideos = [];
        $trechosAudios = [];

        if (!(is_null($request->buscaTodos))) {
            $trechosVideos = $this->videos($request->buscaTodos);
            $trechosAudios = $this->audios($request->buscaTodos);
            return view('glossario.pesquisa')->with(['resultado' => $request->buscaTodos, 'trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios]);
        } else if (!(is_null($request->buscaVideo))) {
            $trechosVideos = $this->videos($request->buscaVideo);
            return view('glossario.pesquisa')->with(['resultado' => $request->buscaVideo, 'trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios]);
        } else if (!(is_null($request->buscaAudio))) {
            $trechosAudios = $this->audios($request->buscaAudio);
            return view('glossario.pesquisa')->with(['resultado' => $request->buscaAudio, 'trechosVideos' => $trechosVideos, 'trechosAudios' => $trechosAudios]);
        }
        return redirect( route('pesquisa') );
    }

    public function audios($busca) {
        return DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                    ->select('trechos.*')
                    ->where([['verbetes.descricao', 'ilike', $busca.'%'], ['tipo_recurso', '=', 'áudio']])
                    ->get();
    }

    public function videos($busca) {
        return DB::table('verbetes')->join('trechos', 'verbetes.id', '=', 'trechos.verbete_id')
                    ->select('trechos.*')
                    ->where([['verbetes.descricao', 'ilike', $busca.'%'], ['tipo_recurso', '=', 'vídeo']])
                    ->get();
    }

    public function pesquisaId($id) {
        $trecho = \App\Trecho::find($id);
        
        $trechos = collect(
            [
                0 => $trecho,
            ]
        );

        if ($trecho->tipo_recurso == 'áudio') {
            return view('glossario.pesquisa')->with(['resultado' => '', 'trechosVideos' => $trechos, 'trechosAudios' => $trechos]);
        } else {
            return view('glossario.pesquisa')->with(['resultado' => '', 'trechosVideos' => $trechos, 'trechosAudios' => $trechos]);
        }
        return redirect( route('pesquisa') );
    }
}
