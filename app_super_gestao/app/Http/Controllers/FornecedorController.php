<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '0000', 'ddd' => '81', 'tel' => '9 8918-9090'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => null, 'ddd' => '11', 'tel' => '9 7232-3122'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'S', 'cnpj' => null, 'ddd' => '85', 'tel' => '9 7232-3122']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
