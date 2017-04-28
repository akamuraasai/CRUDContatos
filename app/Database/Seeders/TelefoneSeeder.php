<?php

namespace App\Database\Seeders;

class TelefoneSeeder extends BaseSeed
{
    protected $tabela = 'telefones';

    public function telefone_seed()
    {
        $this->seed(50, 'numero, tipo, contato_id', '?, ?, ?', ['fone', 'num3', 'id'], 'Telefone');
    }
}