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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/admin', function () {
//     return view('administrador_page');
// });

$this->get('admin', 'AdministradorController@index');

// Route::match(['get', 'post'], '/agendamento', function () {
//     return view('agendamento');
// });
//Route::get('/agendamento', 'AgendamentoController@index')->name('agendamento');
$this->get('agendamento', 'AgendamentoController@index');
