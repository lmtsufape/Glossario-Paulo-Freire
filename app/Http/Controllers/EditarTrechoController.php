<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarTrechoController extends Controller
{
    public function index($id) {
        $trecho = \App\Trecho::where('id', '=', $id)->first();
        return view('glossario.editar_trecho')->with(['trecho' => $trecho]);
    }

    public function cancel() {
        return redirect()->back();
    }
}
