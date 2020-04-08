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
        $arquivo = '';
        $trecho = \App\Trecho::find($id);

        $validated = $request->validate([
            'texto' => 'required',
            'titulo_video' => 'required',
            'arquivo' => 'nullable',
        ]);
        
        //substituindo o texto e o titulo do $request no trecho
        $trecho->texto = $request->texto;
        $trecho->titulo_video = $request->titulo_video;
        
        //verifica se foi um video ou audio
        if (is_null($request->file('arquivo'))) {
            //Se sim pega a referencia do arquivo do banco
            $arquivo = $trecho->arquivo;
        } else {
            //Se não pega o arquivo q foi enviado
            $arquivo = $request->file('arquivo')->store('multimidia', 'public');
        }

        //Checa se o trecho já tem algum arquivo associado a ele e se foi enviado um novo arquivo
        if ($trecho->arquivo != '' && !(is_null($request->file('arquivo')))) {
            //deleta o arquivo que estava associado ao trecho
            Storage::delete($trecho->arquivo);
        }

        //coloca a referencia do arquivo no trecho
        $trecho->arquivo = $arquivo;
        //salva a edição
        $trecho->update();

        return redirect()->back()->with('mensagem', 'Trecho salvo com sucesso!');
    }

    public function cancel() {
        return redirect()->back();
    }
}