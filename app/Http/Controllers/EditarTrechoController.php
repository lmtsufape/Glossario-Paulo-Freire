<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarTrechoController extends Controller
{
    public function index($id) {
        $trecho = \App\Trecho::where('id', '=', $id)->first();
        return view('glossario.editar_trecho')->with(['trecho' => $trecho]);
    }

    public function update(Request $request, $id) {
        // verificando se o video ou audio foi enviado e é valido
        if ($request->hasFile('video') || $request->hasFile('audio') && $request->file('video')->isValid() || $request->file('audio')->isValid()) {
            //recuperando o trecho
            $trecho = \App\Trecho::find($id);
            
            //substituindo o texto e o titulo do $request no trecho
            $trecho->texto = $request->texto;
            $trecho->titulo_video = $request->titulo_video;

            //verifica se foi um video ou audio
            if (is_null($request->file('audio'))) {
                //salva o arquivo na pasta de destino pelo metodo store()
                $arquivo = $request->file('video')->store('multimidia', 'public'); 
            } else {
                //salva o arquivo na pasta de destino pelo metodo store()
                $arquivo = $request->file('audio')->store('multimidia', 'public'); 
            }

            //coloca a referencia do arquivo no trecho
            $trecho->arquivo = $arquivo;
            //salva a edição
            $trecho->update();

            // return view()->
        }
    }

    public function cancel() {
        return redirect()->back();
    }
}
