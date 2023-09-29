<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', ['titulo' => 'login']);
    }

    public function autenticar(Request $request) {
        
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedbackValidacao = [
            'usuario.email' => 'O campo usuário precisa ser um e-mail válido',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedbackValidacao);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha : $password";
        echo '<br>';

        print_r($request->all());
    }

}
