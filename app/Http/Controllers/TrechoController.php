<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class TrechoController extends Controller
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
            'tempo' => 'required',
            'endereco_video' => 'required',
            'arquivo_hd' => 'nullable',
            'arquivo_sd' => 'nullable',
        ]);

        if (filter_var($request->endereco_video, FILTER_VALIDATE_URL) === FALSE) {
            return redirect()->back()->withErrors(['error' => "link inválido"]);
        }
        
        //substituindo o texto e o titulo do $request no trecho
        $trecho->texto = $request->texto;
        $trecho->titulo_video = $request->titulo_video;
        $trecho->endereco_video = $request->endereco_video;
        $trecho->tempo = $request->tempo;
        
        //salvar o nome do arquivo para resetar as views
        $nome_antigo_hd = $trecho->arquivo_hd;
        $nome_antigo_sd = $trecho->arquivo_sd;

        //colocando os nomes dos arquivos como referencia

        if ($trecho->tipo_recurso == "áudio") {
            if (is_null($request->file('arquivo_hd_audio'))) {
                $trecho->arquivo_hd = $trecho->arquivo_hd;
            } else {
                $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd_audio'), $trecho->arquivo_hd);
            }
    
            if (is_null($request->file('arquivo_sd_audio'))) {
                $trecho->arquivo_hd = $trecho->arquivo_hd;
            } else {
                $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd_audio'), $trecho->arquivo_sd);
            }
        } else {
            if (is_null($request->file('arquivo_hd_video'))) {
                $trecho->arquivo_hd = $trecho->arquivo_hd;
            } else {
                $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd_video'), $trecho->arquivo_hd);
            }
    
            if (is_null($request->file('arquivo_sd_video'))) {
                $trecho->arquivo_hd = $trecho->arquivo_hd;
            } else {
                $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd_video'), $trecho->arquivo_sd);
            }
        }
        
        //checagem se mudou de arquivo para resetar as views
        //as views só seram resetadas se os dois arquivos forem mudados
        if ($nome_antigo_sd != $trecho->arquivo_sd && $nome_antigo_hd != $trecho->arquivo_hd) {
            $trecho->quant_views = 0;
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

    public function adicionar($id) {
        return view('glossario.adicionar_trecho')->with(['id' => $id]);
    }

    public function salvar(Request $request, $id) {
        // dd($request);
        $validated = $request->validate([
            'texto' => 'required',
            'titulo_video' => 'required',
            'tipo_recurso' => 'required',
            'tempo' => 'required',
            'endereco_video' => 'required',
            'arquivo_hd' => 'nullable',
            'arquivo_sd' => 'nullable',
        ]);

        if (filter_var($request->endereco_video, FILTER_VALIDATE_URL) === FALSE) {
            return redirect()->back()->withErrors(['error' => "link inválido"]);
        }

        $trecho = new \App\Trecho();

        $trecho->verbete_id = $id;
        $trecho->texto = $request->texto;
        $trecho->titulo_video = $request->titulo_video;
        $trecho->tipo_recurso = $request->tipo_recurso;
        $trecho->tempo = $request->tempo;
        $trecho->endereco_video = $request->endereco_video;
        $trecho->quant_views = 0;
        
        if ($request->tipo_recurso == "áudio") {
            //colocando os nomes dos arquivos como referencia
            if (is_null($request->file('arquivo_hd_audio'))) {
                $trecho->arquivo_hd = '';
            } else {
                $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd_audio'), '');
            }

            if (is_null($request->file('arquivo_sd_audio'))) {
                $trecho->arquivo_sd = '';
            } else {
                $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd_audio'), '');
            }
        } else {
            //colocando os nomes dos arquivos como referencia
            if (is_null($request->file('arquivo_hd_video'))) {
                $trecho->arquivo_hd = '';
            } else {
                $trecho->arquivo_hd = $this->nomeDoArquivo($request->file('arquivo_hd_video'), '');
            }

            if (is_null($request->file('arquivo_sd_video'))) {
                $trecho->arquivo_sd = '';
            } else {
                $trecho->arquivo_sd = $this->nomeDoArquivo($request->file('arquivo_sd_video'), '');
            } 
        }

        $trecho->save();
        
        return redirect( route('verbete', ['id' => $id]) )->with('mensagem', 'Trecho salvo com sucesso!');
    }

    public function deletar($id) {
        $trecho = \App\Trecho::find($id);

        if ($trecho->arquivo_hd != '') {
            Storage::delete($trecho->arquivo_hd);
        }

        if ($trecho->arquivo_sd != '') {
            Storage::delete($trecho->arquivo_sd);
        }

        $trecho->delete();

        return redirect()->back()->with('mensagem', 'Trecho excluido com sucesso!');
    }
}