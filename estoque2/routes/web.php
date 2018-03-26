<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('welcome');
});

Route::get('/laravel', function(){
	return '<h1>LARAVEL 5.5</h1>';
});

Route::get('/teste', function(){
	$t = 'velho php é';
	$return = $t.' um amor com laravel';
	return '<h1>'.$return.'</h1>';
});

Route::get('/produtos',['as' => 'apelido', 'uses' => 'ProdutoController@lista']);

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');



/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/


Route::get('/home', 'HomeController@index');
/*Auth::routes();

Route::get('/login', 'Auth\LoginController@login');

Route::get('/te', function(){
	return view('layout');
});*/
