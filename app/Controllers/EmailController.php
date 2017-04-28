<?php

namespace App\Controllers;

use App\Models\Email;
use App\Repositories\EmailRepository;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->model = new Email();
        $this->repo = new EmailRepository();
    }

    public function lista()
    {
        return $this->repo->listar_emails();
    }

    public function busca_id($id)
    {
        return $this->repo->buscar_email_por_id($id);
    }

    public function salva($request = null)
    {
        $valida = $this->model->valida_request($request);
        if (!$valida['resultado'])
            return json_encode($valida['erros']);

        if (isset($request['id']))
            $model = Email::buscar_por_id($request['id']);
        else
            $model = new Email();

        $model->email = $request['email'];
        $model->tipo = $request['tipo'];
        $model->contato_id = $request['contato_id'];

        return $model->salvar();
    }

    public function deleta($request = null)
    {
        if ($request == null)
            return json_encode(['resultado' => false, 'mensagem' => 'Execução incorreta do método.']);

        if (isset($request['id']))
            $model = Email::buscar_por_id($request['id']);
        else
            return json_encode(['resultado' => false, 'mensagem' => 'Execução do método com parametros incorretos.']);

        return $model->deletar();
    }
}