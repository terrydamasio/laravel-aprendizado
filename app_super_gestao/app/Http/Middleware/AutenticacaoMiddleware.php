<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        //verifica se o usuário possui acesso a rota
        echo $metodo_autenticacao . '-' . $perfil . '<br>';

        if($metodo_autenticacao == 'padrao') {
            echo 'Verificar senha e usuário no banco de dados '.  $perfil .'<br>';
        } 

        if($metodo_autenticacao == 'ldap') {
            echo 'Verificar senha e usuário no AD '.  $perfil .'<br>';
        } 

        if(false) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação.');
        }
    }
}
