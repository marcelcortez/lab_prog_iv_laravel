<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LoginController@login')->name('login');
Route::get('/mainMenu', 'MainMenuController@mainMenu')->name('mainMenu');

Route::get('/cadMedico', 'CadMedicoController@cadMedico')->name('cadMedico');
Route::get('/cadCliente', 'CadClienteController@cadCliente')->name('cadCliente');
Route::get('/cadAnimal', 'CadAnimalController@cadAnimal')->name('cadAnimal');

Route::get('/agendExame', 'AgendExameController@agendExame')->name('agendExame');
Route::get('/agendConsulta', 'AgendConsultaController@agendConsulta')->name('agendConsulta');
Route::get('/agendCirurgia', 'AgendCirurgiaController@agendCirurgia')->name('agendCirurgia');






