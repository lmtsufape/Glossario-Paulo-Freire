<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditarTrechoController extends Controller
{
    public function index($id) {
        $trecho = \App\Trecho::where('id', '=', $id)->first();
        return view('glossario.editar_trecho')->with(['trecho' => $trecho]);
    }

    public function update(Request $request, $id) {
        //recuperando o trecho
        $trecho = \App\Trecho::find($id);
        
        //substituindo o texto e o titulo do $request no trecho
        $trecho->texto = $request->texto;
        $trecho->titulo_video = $request->titulo_video;

        //verifica se foi um video ou audio
        if (is_null($request->file('audio'))) {
            //salva o arquivo na pasta de destino pelo metodo store()
            $validated = $request->validate([
                'texto' => 'required',
                'titulo_video' => 'required',
                'video' => 'required',
            ]);

            $arquivo = $request->file('video')->store('multimidia', 'public'); 
        } else {
            //salva o arquivo na pasta de destino pelo metodo store()

            $validated = $request->validate([
                'texto' => 'required',
                'titulo_video' => 'required',
                'audio' => 'required',
            ]);

            $arquivo = $request->file('audio')->store('multimidia', 'public'); 
        }

        //checa se o trecho já tem algum arquivo associado a ele
        if ($trecho->arquivo != '') {
            //deleta o arquivo que estava associado ao trecho
            Storage::delete($trecho->arquivo);
        }

        //coloca a referencia do arquivo no trecho
        $trecho->arquivo = $arquivo;
        //salva a edição
        $trecho->update();

        // return view()->
    }

    public function cancel() {
        return redirect()->back();
    }
}