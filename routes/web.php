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
    return view('templetes/home');
});

Route::get('charts', function () {
    return view('templetes/charts');
});

Route::get('listar_alunos', function () {
    return view('students/list_all');
});

Route::get('cadastros_incompletos', function () {
    return view('templetes/charts');
});

Route::get('/usuarios/listar', 'UserController@list_all');
Route::resource('/usuarios', 'UserController');