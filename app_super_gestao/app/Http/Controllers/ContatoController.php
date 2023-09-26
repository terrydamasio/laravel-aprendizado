<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivos_contato = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivos_contato' => $motivos_contato]); 
    }

    public function salvar(Request $request) {
       
        //validação de dados do formulário
        $request->validate([
            'nome' => 'required|min:3|max:40',            
            'telefone' => 'required',            
            'email' => 'required',            
            'motivo' => 'required',                       
            'mensagem' => 'required'                     
        ]);

        //SiteContato::create($request->all());
    }
}
