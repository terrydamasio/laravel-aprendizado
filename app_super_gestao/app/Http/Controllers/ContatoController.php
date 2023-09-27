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
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',            
            'telefone' => 'required',            
            'email' => 'email',            
            'motivo_contatos_id' => 'required',                       
            'mensagem' => 'required'                     
        ];

        $mensagem_validacao =  [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres.',
            'nome.unique' => 'Já esxiste um usuário cadastrado com esse nome.',
            'email.email' => 'O email precisa ser válido.',

            'required' => 'O campo :attribute deve ser preenchido.'
        ]; 
        //validação de dados do formulário
        $request->validate($regras, $mensagem_validacao);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
