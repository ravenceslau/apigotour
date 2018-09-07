<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/api/pacotes', 'PacoteController@buscarTodosPacotes');
$router->group(['prefix' => 'api/pacote'], function () use ($router) {
    $router->get('buscar/{id}', 'PacoteController@buscarPacote');
    $router->get('{id}/detalhes', 'PacoteController@buscarDetalhePacote');
    $router->post('/criar', 'PacoteController@criarPacote');
    $router->put('editar/{id}', 'PacoteController@editarPacote');
    $router->delete('excluir/{id}', 'PacoteController@excluirPacote');
});

