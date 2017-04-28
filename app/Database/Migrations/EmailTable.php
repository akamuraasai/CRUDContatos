<?php

namespace App\Database\Migrations;

class EmailTable extends BaseMigration
{
    private $nome = 'emails';
    private $campos;

    public function criar_tabela_emails()
    {
        $this->campos = "id int not null auto_increment primary key,
	                     email varchar(250) not null,
	                     tipo tinyint(1) not null,
	                     contato_id int not null";

        return $this->criar_tabela($this->nome, $this->campos) ?
            'Tabela E-mails criada com sucesso.' :
            'Erro ao criar tabela E-mails.';
    }

    public function remover_tabela_emails()
    {
        return $this->remover_tabela($this->nome) ?
            'Tabela E-mails removida com sucesso.' :
            'Erro ao remover tabela E-mails.';
    }
}