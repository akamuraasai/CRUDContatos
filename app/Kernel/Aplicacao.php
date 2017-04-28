<?php

namespace App\Kernel;

class Aplicacao
{
    public function iniciar()
    {
        $rotas = new ModuloRota();
        require __DIR__ . '/../Routes/web.php';

        echo $rotas->escutar();
    }
}