<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $fornecedor = new Fornecedor();
        
        $fornecedor->nome = 'Fornecedor 1';
        $fornecedor->site = 'fornecedor1.com.br';
        $fornecedor->uf = 'pe';
        $fornecedor->email = 'fornecedor1@contato.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'sp',
            'email' => 'fornecedor2@contato.com.br'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 2',
            'site' => 'fornecedor2.com.br',
            'uf' => 'sp',
            'email' => 'fornecedor2@contato.com.br'
        ]);
        */

        factory(Fornecedor::class, 100)->create();
    }
}
