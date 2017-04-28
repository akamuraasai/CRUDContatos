<?php

namespace App\Repositories;

class ContatoRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'contatos';
    }

    public function listarContatos()
    {
        return $this->listar();
    }

    public function buscarContatoPorId($id)
    {
        return $this->listar('*', 'id = ?', [$id]);
    }

    public function salvarContato($model)
    {
        if ($model->getId() === null) {
            $campos = 'nome';
            $parametros = '?';
            $valores = [$model->nome];

            return $this->inserir($campos, $parametros, $valores) ?
                ['resultado' => true, 'mensagem' => 'Contato inserido com sucesso.'] :
                ['resultado' => false, 'mensagem' => 'Erro ao inserir contato.'];
        }

        $set = 'nome = ?';
        $where = 'id = ?';
        $valores = [$model->nome, $model->getId()];
        return $this->alterar($set, $where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Contato alterado com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao alterar contato.'];
    }

    public function excluirContato($model)
    {
        $where = 'id = ?';
        $valores = [$model->getId()];
        return $this->excluir($where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Contato excluído com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao excluir contato.'];
    }
}