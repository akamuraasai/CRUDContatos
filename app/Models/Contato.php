<?php

namespace App\Models;

use App\Repositories\ContatoRepository;

class Contato extends Model
{
    private $id = null;
    public $nome;

    public function __construct()
    {
        $this->validacoes = [
            ['nome' => 'nome', 'requerido' => true, 'min' => 6, 'max' => 250]
        ];
        $this->repo = new ContatoRepository();
    }

    static public function buscarPorId($id)
    {
        $repo = new ContatoRepository();
        $array = json_decode($repo->buscarContatoPorId($id));
        if (count($array) == 0) {
            echo json_encode(['resultado' => false, 'mensagem' => 'Contato não encontrado.']);
            die();
        }
        $retorno = new Contato();
        $retorno->id = $array[0]->id;
        $retorno->nome = $array[0]->nome;

        return $retorno;
    }

    public function getId()
    {
        return $this->id;
    }

    public function salvar()
    {
        return json_encode($this->repo->salvarContato($this));
    }

    public function deletar()
    {
        return json_encode($this->repo->excluirContato($this));
    }
}