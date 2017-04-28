<?php

namespace App\Models;

use App\Repositories\EmailRepository;

class Email extends Model
{
    private $id = null;
    public $email;
    public $tipo;
    public $contato_id;

    public function __construct()
    {
        $this->validacoes = [
            ['nome' => 'email', 'requerido' => true, 'min' => 6, 'max' => 250],
            ['nome' => 'tipo', 'requerido' => true],
            ['nome' => 'contato_id', 'requerido' => true]
        ];
        $this->repo = new EmailRepository();
    }

    static public function buscar_por_id($id)
    {
        $repo = new EmailRepository();
        $array = json_decode($repo->buscar_email_por_id($id));
        if (count($array) == 0) {
            echo json_encode(['resultado' => false, 'mensagem' => 'E-mail não encontrado.']);
            die();
        }
        $retorno = new Email();
        $retorno->id = $array[0]->id;
        $retorno->email = $array[0]->email;
        $retorno->tipo = $array[0]->tipo;
        $retorno->contato_id = $array[0]->contato_id;

        return $retorno;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function salvar()
    {
        return json_encode($this->repo->salvar_email($this));
    }

    public function deletar()
    {
        return json_encode($this->repo->excluir_email($this));
    }
}