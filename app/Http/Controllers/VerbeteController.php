<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerbeteController extends Controller
{
    public function exibir() {
        return view('glossario.adicionar_verbete');
    }

    public function adicionar(Request $request) {
        $validated = $request->validate([
            'nome' => 'required',
        ]);

        $verbete = new \App\Verbete();

        $verbete->descricao = $request->nome;
        $verbete->save();

        return redirect( route('glossario') )->with('mensagem', 'Verbete salvo com sucesso!');
    }

    public function deletar($id) {
        $verbete = \App\Verbete::find($id);
        $verbete->delete();

        return redirect( route('glossario') )->with('mensagem', 'Verbete excluido com sucesso!');
    }

    public function editar(Request $request, $id) {
        $validated = $request->validate([
            'descricao' => 'required',
        ]);

        $verbete = \App\Verbete::find($id);

        $verbete->descricao = $request->descricao;
        $verbete->update();

        return redirect()->back()->with('mensagem', 'Verbete editado com sucesso!');;
    }
}
