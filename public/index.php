<?php

require __DIR__ . '/../boostrap/app.php';

$app = new App\Kernel\Aplicacao();
echo $app->iniciar();