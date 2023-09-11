<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste2Controller extends Controller
{
    public function teste2(string $nome, string $sobrenome) {
        return view('site.teste2', compact('nome', 'sobrenome'));
    }
}
