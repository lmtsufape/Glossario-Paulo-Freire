<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarTrechoController extends Controller
{
    public function listar($id) {
        $verbete = \App\Verbete::find($id);
        $trechos = \App\Trecho::where('verbete_id', $id)->get();
        return View('listarTrecho')->with(['trechos' => $trechos, 'verbete' => $verbete]);
    }
}
