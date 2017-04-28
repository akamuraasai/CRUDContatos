<?php
require __DIR__ . '/../bootstrap/app.php';

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__.$uri))  return false;

$app = new App\Kernel\Aplicacao();
echo $app->iniciar();