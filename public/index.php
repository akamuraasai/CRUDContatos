<?php

require __DIR__ . '/../bootstrap/app.php';

$app = new App\Kernel\Aplicacao();
echo $app->iniciar();