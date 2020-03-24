<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function novaPesquisa(Request $request) {
        if ($request->box == "") {
            return redirect( route('pesquisa') )->withErrors(['buscaEmBranco' => 'Por favor, digite a busca']);
        } else {
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
                $trechosTemp = \App\Trecho::where('verbete_id', $verbete->id)->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }
            return redirect( route('pesquisa') )->with(['trechos' => $trechos, 'tipo' => 'Áudios e Vídeos']);
        } 
    }

    public function novaPesquisaVideo(Request $request) {
        if ($request->box == "") {
            return redirect( route('pesquisa') )->withErrors(['buscaEmBranco' => 'Por favor, digite a busca']);
        } else {
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
                $trechosTemp = \App\Trecho::where([['verbete_id', $verbete->id], ['tipo_recurso', 'vídeo']])->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }

            return redirect( route('pesquisa') )->with(['trechos' => $trechos, 'tipo' => 'Vídeos']);
        }
        
    }

    public function novaPesquisaAudio(Request $request) {
        if ($request->box == "") {
            return redirect( route('pesquisa') )->withErrors(['buscaEmBranco' => 'Por favor, digite a busca']);
        } else {
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
                $trechosTemp = \App\Trecho::where([['verbete_id', $verbete->id], ['tipo_recurso', 'áudio']])->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }
            return redirect( route('pesquisa') )->with(['trechos' => $trechos, 'tipo' => 'Áudios']);
        }        
    }
}
