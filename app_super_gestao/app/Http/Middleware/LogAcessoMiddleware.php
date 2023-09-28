<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        //recebendo e manipular o request
        //return $next($request); //empurra a requisião para frente -> envia a requisição para o método do controlador
        //recuperar response e manipular antes de entrega-la para o browser 

        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcesso::create(['log' => "IP $ip registrou a rota $route"]);
        
        //return $next($request);

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status e texto da resposta foram modificados.');

        //dd($resposta);

        return $resposta;
    }
}
