<?php

namespace App\Database\Seeders;

class ContatoSeeder extends BaseSeed
{
    protected $tabela = 'contatos';

    public function contato_seed()
    {
        $this->seed(15, 'nome', '?', ['nome'], 'Contato');
    }
}