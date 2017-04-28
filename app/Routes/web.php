<?php

$rotas->adiciona('GET', '/sobre', function () {
    return 'CRUD Contatos Versão 1.0.0.';
});

//=========================================================================================
// Rotas de Contato
//=========================================================================================
$rotas->adiciona('GET', '/', 'App\Controllers\ContatoController@index');
$rotas->adiciona('GET', '/listar', 'App\Controllers\ContatoController@lista');
$rotas->adiciona('GET', '/buscar/{id}', 'App\Controllers\ContatoController@busca_id');
$rotas->adiciona('POST', '/salvar', 'App\Controllers\ContatoController@salva');
$rotas->adiciona('POST', '/deletar', 'App\Controllers\ContatoController@deleta');
//=========================================================================================

//=========================================================================================
// Rotas de Email
//=========================================================================================
$rotas->adiciona('GET', '/email-listar', 'App\Controllers\EmailController@lista');
$rotas->adiciona('GET', '/email-buscar/{id}', 'App\Controllers\EmailController@busca_id');
$rotas->adiciona('POST', '/email-salvar', 'App\Controllers\EmailController@salva');
$rotas->adiciona('POST', '/email-deletar', 'App\Controllers\EmailController@deleta');
//=========================================================================================

//=========================================================================================
// Rotas de Telefone
//=========================================================================================
$rotas->adiciona('GET', '/fone-listar', 'App\Controllers\TelefoneController@lista');
$rotas->adiciona('GET', '/fone-buscar/{id}', 'App\Controllers\TelefoneController@busca_id');
$rotas->adiciona('POST', '/fone-salvar', 'App\Controllers\TelefoneController@salva');
$rotas->adiciona('POST', '/fone-deletar', 'App\Controllers\TelefoneController@deleta');
//=========================================================================================