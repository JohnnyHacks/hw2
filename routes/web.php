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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', "HomeController@index");

Route::get('listaprodotti', "ListaProdottiController@index");
Route::get('listaprodotti/caricamento', "ListaProdottiController@caricamentoProdotti");
Route::get('listaprodotti/cookie/{q}', "ListaProdottiController@checkCookie");
Route::get('listaprodotti/aggiungiAlCarrello/{q}', "ListaProdottiController@aggiungiAlCarrello");

Route::get('areaclienti', "AreaClientiController@index");
Route::get('areaclienti/mostraCarrello', "AreaClientiController@mostraCarrello");
Route::get('areaclienti/eliminaProdotto/{q}', "AreaClientiController@eliminaProdotto");

Route::get('login', "LoginController@login");
Route::post('login', "LoginController@checkLogin");
Route::get('logout', "LoginController@logout");

Route::get('signup', "SignupController@index");
Route::post('signup', "SignupController@create");
Route::get('signup/username/{q}', "SignupController@checkUsername");
Route::get('signup/email/{q}', "SignupController@checkEmail");

Route::get('ricetta', "RicettaController@index");
Route::get('ricetta/cercaRicetta', "RicettaController@cercaRicetta");
Route::get('ricetta/cercaValoriNutrizionali/{q}', "RicettaController@cercaValoriNutrizionali");

Route::get('puntivendita', "PuntiVenditaController@index");
Route::get('puntivendita/informazioniSupermercato', "PuntiVenditaController@informazioniSupermercato");
Route::get('puntivendita/informazioniReparto', "PuntiVenditaController@informazioniReparto");
