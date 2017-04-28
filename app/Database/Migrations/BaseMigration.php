<?php

namespace App\Database\Migrations;

use App\Kernel\Database;

class BaseMigration extends Database
{
    public function criar_tabela($nome, $campos)
    {
        $query = "CREATE TABLE IF NOT EXISTS {$nome} (
                    {$campos}
                  )";
        try {
            $resultado = $this->con->prepare($query);
            $resultado->execute();

            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function remover_tabela($nome)
    {
        $query = "DROP TABLE IF EXISTS {$nome}";
        try {
            $resultado = $this->con->prepare($query);
            $resultado->execute();

            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    static public function up()
    {
        $contatos = new ContatoTable();

        echo "\033[0;32mTabela Contatos: " . $contatos->criar_tabela_contato() . "\033[0m\n";
    }

    static public function down()
    {
        $contatos = new ContatoTable();

        echo "\033[0;31mTabela Contatos: " . $contatos->remover_tabela_contato() . "\033[0m\n";
    }
}