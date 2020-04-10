<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
            'arquivo_hd' => 'nullable',
            'arquivo_sd' => 'nullable',
        ]);
        
        //substituindo o texto e o titulo do $request no trecho
        $trecho->texto = $request->texto;
        $trecho->titulo_video = $request->titulo_video;
        
        //colocando os nomes dos arquivos como referencia
        $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd'), $trecho->arquivo_hd);
        $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd'), $trecho->arquivo_sd);

        //salva a edição
        $trecho->update();

        return redirect()->back()->with('mensagem', 'Trecho salvo com sucesso!');
    }

    public function nomeDoArquivo($file, $arquivo) {
        //verifica se o arquivo foi enviado
        if (is_null($file)) {
            //Se sim pega a referencia do arquivo do banco
            $nome = $arquivo;
        } else {
            //Se não pega o arquivo que foi enviado
            $nome = $file->store('multimidia', 'public');
        }

        //Checa se o trecho já tem algum arquivo associado a ele e se foi enviado um novo arquivo
        if ($arquivo != '' && !(is_null($file))) {
            //deleta o arquivo que estava associado ao trecho
            Storage::delete($arquivo);
        }

        //retorna o novo nome do arquivo
        return $nome;
    }

    public function cancel() {
        return redirect()->back();
    }
}