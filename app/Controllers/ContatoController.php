<?php

namespace App\Controllers;

use App\Models\Contato;
use App\Repositories\ContatoRepository;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->model = new Contato();
        $this->repo = new ContatoRepository();
    }

    public function index()
    {
        return 'Pagina Inicial.';
    }

    public function lista()
    {
        return $this->repo->listar_contatos();
    }

    public function buscaId($id)
    {
        return $this->repo->buscar_contato_por_id($id);
    }

    public function salva($request = null)
    {
        $valida = $this->model->valida_request($request);
        if (!$valida['resultado'])
            return json_encode($valida['erros']);

        if (isset($request['id']))
            $model = Contato::buscar_por_id($request['id']);
        else
            $model = new Contato();

        $model->nome = $request['nome'];

        return $model->salvar();
    }

    public function deleta($request = null)
    {
        if ($request == null)
            return json_encode(['resultado' => false, 'mensagem' => 'Execução incorreta do método.']);

        if (isset($request['id']))
            $model = Contato::buscar_por_id($request['id']);
        else
            return json_encode(['resultado' => false, 'mensagem' => 'Execução do método com parametros incorretos.']);

        return $model->deletar();
    }
}