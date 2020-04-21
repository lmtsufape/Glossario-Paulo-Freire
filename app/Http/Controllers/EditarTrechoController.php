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
        
        //salvar o nome do arquivo para resetar as views
        $nome_antigo_hd = $trecho->arquivo_hd;
        $nome_antigo_sd = $trecho->arquivo_sd;

        //colocando os nomes dos arquivos como referencia

        if (is_null($request->file('arquivo_hd'))) {
            $trecho->arquivo_hd = $trecho->arquivo_hd;
        } else {
            $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd'), $trecho->arquivo_hd);
        }

        if (is_null($request->file('arquivo_sd'))) {
            $trecho->arquivo_hd = $trecho->arquivo_hd;
        } else {
            $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd'), $trecho->arquivo_sd);
        }
        
        //checagem se mudou de arquivo para resetar as views
        //se o hd for '' e o sd algum arquivo então é um audio
        if ($trecho->arquivo_hd == '' && $trecho->arquivo_sd != '') {
            //se o nome antigo for diferente do atual então reseta as views
            if ($nome_antigo_sd != $trecho->arquivo_sd) {
                $trecho->quant_views = 0;
            }
        } else {
            //se não então é um video
            //as views dos videos só seram resetadas se os dois aquivos mudarem
            if ($nome_antigo_sd != $trecho->arquivo_sd && $nome_antigo_hd != $trecho->arquivo_hd) {
                $trecho->quant_views = 0;
            }
        }

        //salva a edição
        $trecho->update();

        return redirect()->back()->with('mensagem', 'Trecho salvo com sucesso!');
    }

    public function nomeDoArquivo($file, $arquivo) {
        $nome = $file->store('multimidia', 'public');

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