<?php

/*
|--------------------------------------------------------------------------
| Rotas da Web
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para sua aplicação. Essas
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo incrível!
|
*/
Route::group(['namespace' => 'PontoEletronico'], function()
{
  Route::get('/', 'IndexController@index');
  
  Route::post('/login', 'LoginController@login');
  Route::post('/registrar', 'PontoController@registrar_validando');
  Route::get('/registrar', 'PontoController@registrar');
  Route::get('/dashboard', 'DashboardController@index');
  
  Route::get('/sair', 'LoginController@sair');
  
});

Route::group(['prefix' => 'painel', 'namespace' => 'PontoEletronico'], function()
{
  Route::post('/login', 'LoginPainelController@login');
  
  Route::get('/', 'IndexPainelController@index');
  
  Route::get('/dashboard', 'DashboardPainelController@index');
  
  Route::get('/usuarios', 'UsuarioController@index');
  Route::get('/usuario/novo', 'UsuarioController@novo');
  Route::get('/usuario/editar/{id}', 'UsuarioController@editar');
  Route::get('/usuario/excluir/{id}', 'UsuarioController@excluir');
  Route::get('/usuario/desabilitar/{id}', 'UsuarioController@desabilitar');
  Route::get('/usuario/habilitar/{id}', 'UsuarioController@habilitar');
  Route::post('/usuario/salvar', 'UsuarioController@salvar'); 
  
  Route::get('/acompanhamento', 'AcompanhamentoController@index');
  Route::post('/acompanhamento', 'AcompanhamentoController@index');
  Route::post('/ponto/salvar', 'PontoPainelController@ajuste');
  Route::post('/ponto/periodo/salvar', 'PontoAjusteController@salvar');
  Route::get('/ajuste', 'PontoAjusteController@index');
  Route::get('/ajuste/excluir/{id}', 'PontoAjusteController@delete');
  Route::get('/certificacao', 'PontoAjusteController@index');
  Route::post('/certificacao/salvar', 'PontoAjusteController@certificar');
  Route::get('/excel-acompanhamento/{usuario}/{inicio}/{fim}', 'AcompanhamentoController@index_download');
  
  Route::get('/sair', 'LoginPainelController@sair');
  
});
