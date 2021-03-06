<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'sistema', 'middleware'=>'auth'], function (){
    Route::group(['prefix'=>'militar'], function () {
        Route::get('listar', 'MilitarController@listar');
        Route::get('ver/{id}', 'MilitarCoarntroller@ver');
        Route::get('excluir/{id}', 'MilitarController@excluir');
        Route::get('editar/{id}', 'MilitarController@editar');
        Route::post('editar/{id}', 'MilitarController@editarPost');
        Route::get('criar', 'MilitarController@criar');
        Route::post('criar', 'MilitarController@criarPost');
    });

    Route::group(['prefix'=>'acessorio'], function () {
        Route::get('listar', 'AcessoriosController@listar');
        Route::get('ver/{id}', 'AcessoriosController@ver');
        Route::get('excluir/{id}', 'AcessoriosController@excluir');
        Route::get('editar/{id}', 'AcessoriosController@editar');
        Route::post('editar/{id}', 'AcessoriosController@editarPost');
        Route::get('criar', 'AcessoriosController@criar');
        Route::post('criar', 'AcessoriosController@criarPost');
    });

    Route::group(['prefix'=>'armamento'], function () {
        Route::get('listar', 'ArmamentoController@listar');
        Route::get('ver/{id}', 'ArmamentoController@ver');
        Route::get('excluir/{id}', 'ArmamentoController@excluir');
        Route::get('editar/{id}', 'ArmamentoController@editar');
        Route::post('editar/{id}', 'ArmamentoController@editarPost');
        Route::get('criar', 'ArmamentoController@criar');
        Route::post('criar', 'ArmamentoController@criarPost');
    });

    Route::group(['prefix'=>'cautela'], function () {
        Route::get('listar/{id?}', 'CautelaController@listar');
        Route::get('ver/{id}', 'CautelaController@ver');
        Route::get('excluir/{id}', 'CautelaController@excluir');
        Route::get('editar/{id}', 'CautelaController@editar');
        Route::post('editar/{id}', 'CautelaController@editarPost');
        Route::get('criar/{militarId}', 'CautelaController@criar');
        Route::post('criar', 'CautelaController@criarPost');
        Route::post('devolver-item/{id}', 'CautelaController@devolverItem');
        Route::get('devolver-tudo/{id}', 'CautelaController@devolverTudo');
    });

    Route::group(['prefix'=>'municao'], function () {
        Route::get('listar', 'MunicaoController@listar');
        Route::get('ver/{id}', 'MunicaoController@ver');
        Route::get('excluir/{id}', 'MunicaoController@excluir');
        Route::get('editar/{id}', 'MunicaoController@editar');
        Route::post('editar/{id}', 'MunicaoController@editarPost');
        Route::get('criar', 'MunicaoController@criar');
        Route::post('criar', 'MunicaoController@criarPost');
    });

    Route::group(['prefix'=>'estoque'], function () {
        Route::get('listar', 'EstoqueController@listar');
        Route::get('teste', 'EstoqueController@teste');
        Route::get('gerenciar', 'EstoqueController@gerenciar');
        Route::post('gerenciar', 'EstoqueController@gerenciarPost');
    });
});
