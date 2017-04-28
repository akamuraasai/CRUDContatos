<?php

namespace App\Repositories;

class EmailRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'emails';
    }

    public function listar_emails()
    {
        return $this->listar();
    }

    public function buscar_email_por_id($id)
    {
        return $this->listar('*', 'id = ?', [$id]);
    }

    public function salvar_email($model)
    {
        if ($model->get_id() === null) {
            $campos = 'email, tipo, contato_id';
            $parametros = '?, ?, ?';
            $valores = [$model->email, $model->tipo, $model->contato_id];

            return $this->inserir($campos, $parametros, $valores) ?
                ['resultado' => true, 'mensagem' => 'E-mail inserido com sucesso.'] :
                ['resultado' => false, 'mensagem' => 'Erro ao inserir e-mail.'];
        }

        $set = 'email = ?, tipo = ?, contato_id = ?';
        $where = 'id = ?';
        $valores = [$model->email, $model->tipo, $model->contato_id, $model->get_id()];
        return $this->alterar($set, $where, $valores) ?
            ['resultado' => true, 'mensagem' => 'E-mail alterado com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao alterar e-mail.'];
    }

    public function excluir_email($model)
    {
        $where = 'id = ?';
        $valores = [$model->get_id()];
        return $this->excluir($where, $valores) ?
            ['resultado' => true, 'mensagem' => 'E-mail excluído com sucesso.'] :
            ['resultado' => false, 'mensagem' => 'Erro ao excluir e-mail.'];
    }
}