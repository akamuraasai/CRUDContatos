<?php

namespace App\Database\Seeders;

class EmailSeeder extends BaseSeed
{
    protected $tabela = 'emails';

    public function email_seed()
    {
        $this->seed(25, 'email, tipo, contato_id', '?, ?, ?', ['email', 'num2', 'id'], 'E-mail');
    }
}