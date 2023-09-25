<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();
        /*
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo = $request->input('motivo');
        $contato->mensagem = $request->input('mensagem');

        $contato->save(); 
        */
        return view('site.contato', ['titulo' => 'Contato']); 
    }
}
