<?php

namespace App\Models;

class Model
{
    protected $validacoes;
    protected $campos;
    protected $repo;

    public function valida_request($request)
    {
        if ($request == null)
            return ['resultado' => false, 'erros' => ['Requisição mal formatada. Tente novamente.']];

        $erros = [];
        foreach ($this->validacoes as $campo) {
            $resultado = $this->valida_campo($campo, $request);
            if (!$resultado['estado']) $erros[] = $resultado['mensagem'];
        }
        if (count($erros) > 0)
            return ['resultado' => false, 'mensagem' => $erros];

        return ['resultado' => true];
    }

    private function valida_campo($campo, $request)
    {
        $chaves = array_keys($request);
        $indice = array_search($campo['nome'], $chaves);
        if (isset($campo['requerido']) && $campo['requerido'] && $indice === false)
            return ['estado' => false, 'mensagem' => "Campo {$campo['nome']} é obrigatório."];

        if (isset($campo['associacao']) && $campo['associacao']) {
            if (isset($campo['min']) && count($request[$chaves[$indice]]) < $campo['min'])
                return ['estado' => false, 'mensagem' => "Campo {$campo['nome']} deve conter no minimo {$campo['min']} itens."];

            if (isset($campo['max']) && count($request[$chaves[$indice]]) > $campo['max'])
                return ['estado' => false, 'mensagem' => "Campo {$campo['nome']} deve conter no maximo {$campo['max']} itens."];

        } else {
            if (isset($campo['min']) && strlen($request[$chaves[$indice]]) < $campo['min'])
                return ['estado' => false, 'mensagem' => "Campo {$campo['nome']} deve conter no minimo {$campo['min']} caracteres."];

            if (isset($campo['max']) && strlen($request[$chaves[$indice]]) > $campo['max'])
                return ['estado' => false, 'mensagem' => "Campo {$campo['nome']} deve conter no maximo {$campo['max']} caracteres."];
        }

        return ['estado' => true];
    }
}