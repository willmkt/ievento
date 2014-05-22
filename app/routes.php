<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('layouts/default');
});

Route::get('/certificado', function()
{
	return View::make('certificado/index');
});

App::bind('InscricaoRepositoryInterface','EloquentInscricaoRepository');
Route::controller('inscricao', 'InscricaoController');

App::bind('PalestraRepositoryInterface','EloquentPalestraRepository');
Route::controller('palestra', 'PalestraController');
