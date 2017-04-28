<?php
namespace App\Controllers;

use App\Models\Model;

class Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        return 'Pagina Inicial.';
    }

    public function buscaId($id)
    {
        return "O id digitado foi {$id}.";
    }

    public function salva($request = null)
    {
        $valida = $this->model->valida_request($request);
        if ($valida['resultado']) {
            return 'Salvo com Sucesso.';
        }
        return json_encode($valida['erros']);
    }
}