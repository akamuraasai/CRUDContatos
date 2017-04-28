<?php

$rotas->adiciona('GET', '/', 'App\Controllers\Controller@index');
$rotas->adiciona('GET', '/sobre', function () {
    return 'CRUD Contatos Versão 1.0.0.';
});
$rotas->adiciona('GET', '/teste/{id}', 'App\Controllers\Controller@buscaId');
$rotas->adiciona('POST', '/salva', 'App\Controllers\Controller@salva');