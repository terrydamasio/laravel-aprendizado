<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware; //1) importar classe

class SobreNosController extends Controller
{
    public function __construct() { //2) criar método construtor
        $this->middleware(LogAcessoMiddleware::class); //3) acessar o middleware passando a classe do middleware
    }
    public function sobrenos() {
        return view('site.sobrenos', ['sobrenos' => 'Sobre Nos']); 
    }
}
