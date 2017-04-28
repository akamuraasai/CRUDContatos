<?php

namespace App\Models;

use App\Repositories\TelefoneRepository;

class Telefone extends Model
{
    private $id = null;
    public $numero;
    public $tipo;
    public $contato_id;

    public function __construct()
    {
        $this->validacoes = [
            ['nome' => 'numero', 'requerido' => true, 'min' => 11, 'max' => 15],
            ['nome' => 'tipo', 'requerido' => true],
            ['nome' => 'contato_id', 'requerido' => true]
        ];
        $this->repo = new TelefoneRepository();
    }

    static public function buscar_por_id($id)
    {
        $repo = new TelefoneRepository();
        $array = json_decode($repo->buscar_telefone_por_id($id));
        if (count($array) == 0) {
            echo json_encode(['resultado' => false, 'mensagem' => 'Telefone não encontrado.']);
            die();
        }
        $retorno = new Telefone();
        $retorno->id = $array[0]->id;
        $retorno->numero = $array[0]->numero;
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
        return json_encode($this->repo->salvar_telefone($this));
    }

    public function deletar()
    {
        return json_encode($this->repo->excluir_telefone($this));
    }
}