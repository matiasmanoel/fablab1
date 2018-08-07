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

Route::get('/nois', function () {
    return view('nois');
});

Route::get('/local', function () {
    return view('local');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/agendamento', 'AgendamentoController');

//Route::resource('/email', 'EmailController');
