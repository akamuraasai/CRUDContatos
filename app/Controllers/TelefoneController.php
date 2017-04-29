<?php

namespace App\Controllers;

use App\Models\Telefone;
use App\Repositories\TelefoneRepository;

class TelefoneController extends Controller
{
    public function __construct()
    {
        $this->model = new Telefone();
        $this->repo = new TelefoneRepository();
    }

    public function lista()
    {
        return $this->repo->listar_telefones();
    }

    public function busca_id($id)
    {
        return $this->repo->buscar_telefone_por_id($id);
    }

    public function salva($request = null)
    {
        $valida = $this->model->valida_request($request);
        if (!$valida['resultado'])
            return json_encode($valida);

        if (isset($request['id']))
            $model = Telefone::buscar_por_id($request['id']);
        else
            $model = new Telefone();

        $model->numero = $request['numero'];
        $model->tipo = $request['tipo'];
        $model->contato_id = $request['contato_id'];

        return $model->salvar();
    }

    public function deleta($request = null)
    {
        if ($request == null)
            return json_encode(['resultado' => false, 'mensagem' => 'Execução incorreta do método.']);

        if (isset($request['id']))
            $model = Telefone::buscar_por_id($request['id']);
        else
            return json_encode(['resultado' => false, 'mensagem' => 'Execução do método com parametros incorretos.']);

        return $model->deletar();
    }
}