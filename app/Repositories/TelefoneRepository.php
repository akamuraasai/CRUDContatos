<?php

namespace App\Repositories;

class TelefoneRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'telefones';
    }

    public function listar_telefones()
    {
        return $this->listar();
    }

    public function buscar_telefone_por_id($id)
    {
        return $this->listar('*', 'id = ?', [$id]);
    }

    public function salvar_telefone($model)
    {
        if ($model->get_id() === null) {
            $campos = 'numero, tipo, contato_id';
            $parametros = '?, ?, ?';
            $valores = [$model->numero, $model->tipo, $model->contato_id];

            return $this->inserir($campos, $parametros, $valores) ?
                ['resultado' => true, 'mensagem' => 'Telefone inserido com sucesso.'] :
                ['resultado' => false, 'mensagem' => 'Erro ao inserir telefone.'];
        }

        $set = 'numero = ?, tipo = ?, contato_id = ?';
        $where = 'id = ?';
        $valores = [$model->numero, $model->tipo, $model->contato_id, $model->get_id()];
        return $this->alterar($set, $where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Telefone alterado com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao alterar telefone.'];
    }

    public function excluir_telefone($model)
    {
        $where = 'id = ?';
        $valores = [$model->get_id()];
        return $this->excluir($where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Telefone excluído com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao excluir telefone.'];
    }
}