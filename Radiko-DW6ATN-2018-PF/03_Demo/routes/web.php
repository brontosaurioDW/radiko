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

Route::get('/', [
	'as' => 'huertas.principal',
	'uses' => 'HuertasController@showPrincipal',
]);

/* --- Huertas */

Route::get('huertas', [
	'as' => 'huertas',
	'uses' => 'HuertasController@index'
]);

Route::get('search', [
	'as' => 'huertas.search',
	'uses' => 'HuertasController@showSearchResults'
]);

Route::get('/huertas/categoria/{categoria}', [
	'as' => 'huertas.categoria',
	'uses' => 'HuertasController@huertasByCategory',
]);

Route::get('/huertas/{huerta}', [
	'as' => 'huertas.show',
	'uses' => 'HuertasController@show',
]);


/* Comentarios */

Route::put('/huertas/{huerta}/comments', [
    'as' => 'huertas.comments',
    'uses' => 'ReviewsController@store',
]);


/* --- Productos */

Route::get('productos', [
	'as' => 'productos.index',
	'uses' => 'ProductosController@index',
]);


/* --- Legales */

Route::get('/legales/faq', function () {
	return view('legales.faq');
});

Route::get('/legales/politica-privacidad', function () {
	return view('legales.politica-privacidad');
});

Route::get('/legales/terminos-condiciones', function () {
	return view('legales.terminos-condiciones');
});




/* --- Auth */

Route::get('login', [
	'as' => 'login',
	'uses' => 'AuthController@showLogin'
]);

Route::get('/registro', [
	'as' => 'registro',
	'uses' => 'AuthController@showRegistro'
]);

Route::get('/registro-mensaje', [
	'as' => 'registro-mensaje',
	'uses' => 'AuthController@showRegistroMensaje'
]);

Route::post('login', [
	'as' => 'auth.doLogin',
	'uses' => 'AuthController@doLogin'
]);

Route::post('registro', [
	'as' => 'auth.doRegistro',
	'uses' => 'AuthController@doRegistro'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'AuthController@logout'
]);


/* --- Perfil */

Route::middleware('auth')->group(function() {

	Route::get('/perfil', [
		'as' => 'perfil',
		'uses' => 'PerfilController@index'
	]);

	Route::get('/perfil/{perfil}', [
		'as' => 'perfil.detalle',
		'uses' => 'PerfilController@show'
	]);

	Route::get('/perfil/{perfil}/editar', [
		'as' => 'perfil.edit',
		'uses' => 'PerfilController@edit'
	]);

	Route::put('/perfil/{perfil}/editar', [
		'as' => 'perfil.update',
		'uses' => 'PerfilController@update'
	]);

});

// Página en mantenimiento

	Route::get('mantenimiento', function() {
		return view('errors.mantenimiento');
	});

// Contacto

	Route::get('contacto', function() {
		return view('contacto.contacto');
	});