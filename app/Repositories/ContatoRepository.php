<?php

namespace App\Repositories;

class ContatoRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'contatos';
    }

    public function listar_contatos()
    {
        return $this->listar('*', '', null, ['emails', 'telefones'], 'contato_id');
    }

    public function buscar_contato_por_id($id)
    {
        return $this->listar('*', 'id = ?', [$id]);
    }

    public function salvar_contato($model)
    {
        if ($model->get_id() === null) {
            $campos = 'nome';
            $parametros = '?';
            $valores = [$model->nome];


            $resultado = $this->inserir($campos, $parametros, $valores, true);
            if (isset($resultado['resultado'])) {
                if ($resultado['resultado'])
                    $model->set_id($resultado['id']);

                $resultado = $resultado['resultado'];
            }

            return $resultado ?
                ['resultado' => true, 'mensagem' => 'Contato inserido com sucesso.'] :
                ['resultado' => false, 'mensagem' => 'Erro ao inserir contato.'];
        }

        $set = 'nome = ?';
        $where = 'id = ?';
        $valores = [$model->nome, $model->get_id()];
        return $this->alterar($set, $where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Contato alterado com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao alterar contato.'];
    }

    public function excluir_contato($model)
    {
        $where = 'id = ?';
        $valores = [$model->get_id()];
        return $this->excluir($where, $valores) ?
            ['resultado' => true, 'mensagem' => 'Contato excluído com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao excluir contato.'];
    }
}