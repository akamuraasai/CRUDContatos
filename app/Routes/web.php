<?php

$rotas->adiciona('GET', '/sobre', function () {
    return 'CRUD Contatos Versão 1.0.0.';
});

$rotas->adiciona('GET', '/', 'App\Controllers\ContatoController@index');
$rotas->adiciona('GET', '/listar', 'App\Controllers\ContatoController@lista');
$rotas->adiciona('GET', '/buscar/{id}', 'App\Controllers\ContatoController@buscaId');
$rotas->adiciona('POST', '/salvar', 'App\Controllers\ContatoController@salva');
$rotas->adiciona('POST', '/deletar', 'App\Controllers\ContatoController@deleta');