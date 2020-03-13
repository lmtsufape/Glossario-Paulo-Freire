<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarVerbeteController extends Controller
{
    public function listar($l) {
        $verbetes = \App\Verbete::where('descricao', 'ilike', $l.'%')->get();
        return View('listarVerbete')->with(['verbetes' => $verbetes, 'letra' => $l]);

    }
}
