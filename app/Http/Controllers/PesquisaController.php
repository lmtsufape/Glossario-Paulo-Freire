<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesquisaController extends Controller
{
    public function novaPesquisa(Request $request) {
            $validator = Validator::make($request->all(), [
                        'box' => 'required',
                ]);
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
               $trechosTemp = \App\Trecho::where('verbete_id', $verbete->id)->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }
            return view('glossario.pesquisa')->with(['trechos' => $trechos, 'tipo' => $verbete->descricao]);
        
    }

    public function novaPesquisaVideo(Request $request) {
            $validator = Validator::make($request->all(), [
                    'box' => 'required',
             ]);
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
                $trechosTemp = \App\Trecho::where([['verbete_id', $verbete->id], ['tipo_recurso', 'vídeo']])->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }

            return view('glossario.pesquisa')->with(['trechos' => $trechos, 'tipo' => $verbete->descricao]);
        
    }

    public function novaPesquisaAudio(Request $request) {
            $validator = Validator::make($request->all(), [
                    'box' => 'required',
            ]);
            $verbetes = \App\Verbete::where('descricao', 'ilike', $request->box.'%')->get();
            $trechos = [];

            foreach ($verbetes as $verbete) {
                $trechosTemp = \App\Trecho::where([['verbete_id', $verbete->id], ['tipo_recurso', 'áudio']])->get();
                foreach ($trechosTemp as $trechoTemp) {
                    array_push($trechos, $trechoTemp);
                }
            }
            return view('glossario.pesquisa')->with(['trechos' => $trechos, 'tipo' => $verbete->descricao]);       
    }
}
