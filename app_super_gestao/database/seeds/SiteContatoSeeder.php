<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contatos = new SiteContato();

        $contatos->nome = 'Sistema SG';
        $contatos->telefone = '(81) 0000-0000';
        $contatos->email = 'contato@sg.com.br';
        $contatos->motivo = 1;
        $contatos->mensagem = 'Teste';
        $contatos->save();
    }
}
