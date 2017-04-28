<?php

namespace App\Database\Migrations;

class TelefoneTable extends BaseMigration
{
    private $nome = 'telefones';
    private $campos;

    public function criar_tabela_telefones()
    {
        $this->campos = "id int not null auto_increment primary key,
	                     numero varchar(15) not null,
	                     tipo tinyint(1) not null,
	                     contato_id int not null";

        return $this->criar_tabela($this->nome, $this->campos) ?
            'Tabela Telefones criada com sucesso.' :
            'Erro ao criar tabela Telefones.';
    }

    public function remover_tabela_telefones()
    {
        return $this->remover_tabela($this->nome) ?
            'Tabela Telefones removida com sucesso.' :
            'Erro ao remover tabela Telefones.';
    }
}