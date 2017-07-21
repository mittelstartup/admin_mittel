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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });

//    Route::get('/home', function () {
//        return view('templetes/home');
//    });

//    Route::get('charts', function () {
//        return view('templetes/charts');
//    });
//
//    Route::get('cadastros_incompletos', function () {
//        return view('templetes/charts');
//    });

    Route::get('/usuarios/listar', 'UserController@list_all');
    Route::resource('/usuarios', 'UserController');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/admin_home', 'AdminHomeController@index');
});

Auth::routes();