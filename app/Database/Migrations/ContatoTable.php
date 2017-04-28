<?php

namespace App\Database\Migrations;

class ContatoTable extends BaseMigration
{
    private $nome = 'contatos';
    private $campos;

    public function criar_tabela_contato()
    {
        $this->campos = "id int not null auto_increment primary key,
	                     nome varchar(250) not null";

        return $this->criar_tabela($this->nome, $this->campos) ?
               'Tabela Contatos criada com sucesso.' :
               'Erro ao criar tabela Contatos.';
    }

    public function remover_tabela_contato()
    {
        return $this->remover_tabela($this->nome) ?
               'Tabela Contatos removida com sucesso.' :
               'Erro ao remover tabela Contatos.';
    }
}