<?php

namespace App\Kernel;

use PDO;

class Database
{
    protected $con;
    protected $sql;
    protected $tabela;

    public function __construct()
    {
        $configs = include(__DIR__ . '/../../config/database.php');
        extract($configs);

        try {
            $this->con = new PDO("$driver:host=$host:$porta;dbname=$banco", $usuario, $senha);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function listar($campos = '*', $where_campos = '', $where_valores = null, $joins = null, $coluna_join = '')
    {
        $query = "SELECT {$campos} FROM {$this->tabela}" .
                 ($where_campos == '' ? '' : " WHERE {$where_campos} ");
        $resultado = $this->con->prepare($query);
        if ($where_valores != null) {
            foreach ($where_valores as $key => $valor) {
                $resultado->bindParam($key + 1, $valor);
            }
        }

        if ($resultado->execute()) {
            $retorno = [];
            while (($row = $resultado->fetch(PDO::FETCH_ASSOC)) !== false) {
                if ($joins != '') {
                    foreach ($joins as $join)
                        $row[$join] = $this->join('*', $join, "{$coluna_join} = ?", [$row['id']]);
                }
                $retorno[] = $row;
            }
            return json_encode($retorno);
        }
    }

    public function inserir($campos = '', $parametros = '', $valores = null, $retorna_id = false)
    {
        $query = "INSERT INTO $this->tabela ({$campos}) VALUES ({$parametros});";
        try {
            $resultado = $this->con->prepare($query);
            foreach ($valores as $key => $valor)
                $resultado->bindParam($key + 1, $valores[$key]);

            $resultado->execute();

            if ($retorna_id)
                return ['resultado' => true, 'id' => $this->con->lastInsertId()];

            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function alterar($set = '', $where = '', $valores = null)
    {
        $query = "UPDATE {$this->tabela} SET {$set} WHERE {$where}";
        try {
            $resultado = $this->con->prepare($query);
            foreach ($valores as $key => $valor)
                $resultado->bindParam($key + 1, $valores[$key]);

            $resultado->execute();

            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function excluir($where = '', $valores = null)
    {
        $query = "DELETE FROM {$this->tabela} WHERE {$where}";
        try {
            $resultado = $this->con->prepare($query);
            foreach ($valores as $key => $valor)
                $resultado->bindParam($key + 1, $valores[$key]);

            $resultado->execute();

            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    private function join($campos = '*', $tabela = '', $where_campos = '', $where_valores = null)
    {
        $query = "SELECT {$campos} FROM {$tabela} WHERE {$where_campos}";
        $resultado = $this->con->prepare($query);
        foreach ($where_valores as $key => $valor)
            $resultado->bindParam($key + 1, $valor);

        if ($resultado->execute()) {
            $retorno = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }
    }
}